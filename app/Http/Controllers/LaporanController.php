<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Smalot\PdfParser\Parser;
use Illuminate\Support\Facades\Log;
use App\Models\Laporan;
use App\Models\LaporanDetail;
use App\Models\ReguLaporan;
use App\Models\JenisKegiatan;
use App\Models\AnggotaTerlibat;
use App\Models\UnsurTerlibat;
use App\Models\SituasiKondisi;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $query = Laporan::query();

        if ($request->filled('bulan')) {
            $query->whereMonth('tanggal_kegiatan', $request->bulan);
        }

        $laporan = $query->orderBy('tanggal_kegiatan', 'desc')->get();

        return view('admin-interface.reports', compact('laporan'));
    }

    public function mainMenu()
    {
        return view('user-interface.user-main');
    }

    public function destroyLaporan($id)
    {
        $laporan = Laporan::findOrFail($id);
        $laporan->delete();

        return redirect()->back()->with('success', 'Laporan berhasil dihapus.');
    }

    public function createLaporan()
    {
        $regu = ReguLaporan::all();
        $jenis_kegiatan = JenisKegiatan::all();
        $anggota_terlibat = AnggotaTerlibat::all();
        $unsur_terlibat = UnsurTerlibat::all();
        $situasi_kondisi = SituasiKondisi::all();
        return view('user-interface.laporan.form-laporan', compact('regu', 'jenis_kegiatan', 'anggota_terlibat', 'unsur_terlibat', 'situasi_kondisi'));
    }

    public function storeLaporan(Request $request)
    {
        $validated = $request->validate([
            'nama_pelapor'        => 'required|string|max:100',
            'regu_id'             => 'required|exists:regu_laporan,id_regu',
            'kegiatan_id'         => 'required|exists:jenis_kegiatan,id_kegiatan',
            'tanggal_kegiatan'    => 'required|date',
            'waktu_kegiatan'      => 'required',
            'lokasi_kegiatan'     => 'required|string',
            'anggota_id'          => 'required|exists:anggota_terlibat,id_anggota',
            'unsur_id'            => 'required|exists:unsur_terlibat,id_unsur',
            'laporan_singkat'     => 'required|string',
            'situasi_id'          => 'required|exists:situasi_kondisi,id_situasi',
            'catatan_laporan'     => 'nullable|string',
        ]);

        // Simpan data ke tabel laporan
        $laporan = Laporan::create([
            'nama_pelapor'      => $validated['nama_pelapor'],
            'regu_id'           => $validated['regu_id'],
            'kegiatan_id'       => $validated['kegiatan_id'],
            'tanggal_kegiatan'  => $validated['tanggal_kegiatan'],
            'waktu_kegiatan'    => $validated['waktu_kegiatan'],
            'lokasi_kegiatan'   => $validated['lokasi_kegiatan'],
            'anggota_id'        => $validated['anggota_id'],
            'unsur_id'          => $validated['unsur_id'],
            'laporan_singkat'   => $validated['laporan_singkat'],
            'situasi_id'        => $validated['situasi_id'],
            'catatan_laporan'   => $validated['catatan_laporan'] ?? null,


        ]);

        // Simpan file dokumentasi jika ada
        if ($request->hasFile('dokumentasi_laporan')) {
            foreach ($request->file('dokumentasi_laporan') as $file) {
                $type = $file->getClientOriginalExtension();

                if ($type === 'pdf' && !$this->isImageOnlyPdf($file)) {
                    return redirect()->back()->withErrors([
                        'dokumentasi_laporan' => 'PDF hanya boleh berisi gambar. Mohon unggah ulang.'
                    ]);
                }

                $path = $file->store('laporan_dokumentasi', 'public');

                LaporanDetail::create([
                    'id_laporan' => $laporan->id_laporan,
                    'file_path' => $path,
                    'file_type' => $type,
                ]);
            }
        }

        // Simpan ID laporan terakhir ke dalam session
        session(['latest_laporan_id' => $laporan->id_laporan]);

        return redirect()->route('success.form', ['id_laporan' => $laporan->id_laporan])
                        ->with('success', 'Laporan berhasil disimpan!');
    }

        private function isImageOnlyPdf($file)
        {
            $parser = new Parser();
            $pdf = $parser->parseFile($file->getPathname());
            $pages = $pdf->getPages();

            foreach ($pages as $page) {
                $text = trim($page->getText());
                if (!empty($text)) {
                    return false;
                }
            }

            return true;
        }

        public function successForm($id_laporan)
        {
            $laporan = Laporan::findOrFail($id_laporan);
            return view('user-interface.laporan.success-form', compact('laporan'));
        }

    public function previewPDF($id_laporan)
    {
        $laporan = Laporan::with('dokumentasi')->findOrFail($id_laporan);

        $user = Auth::user();

        if ($user->role === 'admin') {
            $pdf = Pdf::loadView('user-interface.laporan.generate-pdf', compact('laporan'));
            return $pdf->stream('laporan_'.$id_laporan.'.pdf');
        }

        $latestId = session('latest_laporan_id');
        if ($latestId != $id_laporan) {
            abort(403, 'Unauthorized');
        }

        $pdf = Pdf::loadView('user-interface.laporan.generate-pdf', compact('laporan'));
        return $pdf->stream('laporan_'.$id_laporan.'.pdf');
    }

}

