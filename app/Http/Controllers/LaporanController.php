<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan = Laporan::all();
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
        return view('user-interface.laporan.form-laporan');
    }

    public function storeLaporan(Request $request)
{
    $validated = $request->validate([
        'nama_pelapor' => 'required|string|max:255',
        'regu_pelapor' => 'required|string',
        'jenis_kegiatan' => 'required|string',
        'tanggal_kegiatan' => 'required|date',
        'waktu_kegiatan' => 'required',
        'lokasi_kegiatan' => 'required|string',
        'anggota_terlibat' => 'nullable|string',
        'unsur_terlibat' => 'nullable|string',
        'laporan_singkat' => 'required|string',
        'situasi_kondisi' => 'nullable|string',
        'catatan_laporan' => 'nullable|string',
        'dokumentasi_laporan' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    if ($request->hasFile('dokumentasi_laporan')) {
        $validated['dokumentasi_laporan'] = $request->file('dokumentasi_laporan')->store('laporan', 'public');
    }

    $laporan = Laporan::create($validated);

    $request->session()->put('latest_laporan_id', $laporan->id_laporan);

    return redirect()->route('success.form', ['id_laporan' => $laporan->id_laporan])
                     ->with('success', 'Laporan berhasil disimpan!');
    }

    public function successForm($id_laporan)
    {
        $laporan = Laporan::findOrFail($id_laporan);
        return view('user-interface.laporan.success-form', compact('laporan'));
    }

    public function previewPDF($id_laporan)
    {
        $laporan = Laporan::findOrFail($id_laporan);

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

