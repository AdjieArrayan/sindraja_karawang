<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReguLaporan;
use App\Models\JenisKegiatan;
use App\Models\AnggotaTerlibat;
use App\Models\UnsurTerlibat;
use App\Models\SituasiKondisi;

class FormController extends Controller
{
    // Menampilkan daftar Form (Regu, Kegiatan, Anggota, Unsur, Situasi)
        public function indexRegu()
        {
            $regu = ReguLaporan::all();
            return view('admin-interface.form.regu-pelapor', compact('regu'));
        }

        public function indexKegiatan()
        {
            $jenis_kegiatan = JenisKegiatan::all();
            return view('admin-interface.form.jenis-kegiatan', compact('jenis_kegiatan'));
        }

        public function indexAnggota()
        {
            $anggota_terlibat = AnggotaTerlibat::all();
            return view('admin-interface.form.anggota-terlibat', compact('anggota_terlibat'));
        }

        public function indexUnsur()
        {
            $unsur_terlibat = UnsurTerlibat::all();
            return view('admin-interface.form.unsur-terlibat', compact('unsur_terlibat'));
        }

        public function indexSituasi()
        {
            $situasi_kondisi = SituasiKondisi::all();
            return view('admin-interface.form.situasi-kondisi', compact('situasi_kondisi'));
        }

    // Form tambah regu
        public function createRegu()
        {
            return view('admin-interface.form.add-form.add-regu');
        }

        public function createKegiatan()
        {
            return view('admin-interface.form.add-form.add-kegiatan');
        }

        public function createAnggota()
        {
            return view('admin-interface.form.add-form.add-anggota');
        }

        public function createUnsur()
        {
            return view('admin-interface.form.add-form.add-unsur');
        }

        public function createSituasi()
        {
            return view('admin-interface.form.add-form.add-situasi');
        }

    // Simpan data Form (Regu, Kegiatan, Anggota, Unsur, Situasi)
        public function storeRegu(Request $request)
        {
            $request->validate([
                'nama_regu' => 'required|string|max:255',
            ]);

            ReguLaporan::create([
                'nama_regu' => $request->nama_regu,
            ]);

            return redirect()->route('form.regu.index')->with('success', 'Regu berhasil ditambahkan.');
        }

        public function storeKegiatan(Request $request)
        {
            $request->validate([
                'nama_kegiatan' => 'required|string|max:255',
            ]);

            JenisKegiatan::create([
                'nama_kegiatan' => $request->nama_kegiatan,
            ]);

            return redirect()->route('form.kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan.');
        }

        public function storeAnggota(Request $request)
        {
            $request->validate([
                'anggota_terlibat' => 'required|string|max:255',
            ]);

            AnggotaTerlibat::create([
                'anggota_terlibat' => $request->anggota_terlibat,
            ]);

            return redirect()->route('form.anggota.index')->with('success', 'Anggota berhasil ditambahkan.');
        }

        public function storeUnsur(Request $request)
        {
            $request->validate([
                'unsur_terlibat' => 'required|string|max:255',
            ]);

            UnsurTerlibat::create([
                'unsur_terlibat' => $request->unsur_terlibat,
            ]);

            return redirect()->route('form.unsur.index')->with('success', 'Unsur berhasil ditambahkan.');
        }

        public function storeSituasi(Request $request)
        {
            $request->validate([
                'situasi_kondisi' => 'required|string|max:255',
            ]);

            SituasiKondisi::create([
                'situasi_kondisi' => $request->situasi_kondisi,
            ]);

            return redirect()->route('form.situasi.index')->with('success', 'Situasi berhasil ditambahkan.');
        }

    // Function Edit Form (Regu, Kegiatan, Anggota, Unsur, Situasi)
        public function editRegu($id)
        {
            $regu = ReguLaporan::findOrFail($id);
            return view('admin-interface.form.edit-form.edit-regu', compact('regu'));
        }

        public function editKegiatan($id)
        {
            $jenis_kegiatan = JenisKegiatan::findOrFail($id);
            return view('admin-interface.form.edit-form.edit-kegiatan', compact('jenis_kegiatan'));
        }

        public function editAnggota($id)
        {
            $anggota_terlibat = AnggotaTerlibat::findOrFail($id);
            return view('admin-interface.form.edit-form.edit-anggota', compact('anggota_terlibat'));
        }

        public function editUnsur($id)
        {
            $unsur_terlibat = UnsurTerlibat::findOrFail($id);
            return view('admin-interface.form.edit-form.edit-unsur', compact('unsur_terlibat'));
        }

        public function editSituasi($id)
        {
            $situasi_kondisi = SituasiKondisi::findOrFail($id);
            return view('admin-interface.form.edit-form.edit-situasi', compact('situasi_kondisi'));
        }

    // Function Update Form (Regu, Kegiatan, Anggota, Unsur, Situasi)
        public function updateRegu(Request $request, $id)
        {
            $request->validate([
                'nama_regu' => 'required|string|max:255',
            ]);

            $regu = ReguLaporan::findOrFail($id);
            $regu->update([
                'nama_regu' => $request->nama_regu,
            ]);

            return redirect()->route('form.regu.index')->with('success', 'Regu berhasil diperbarui.');
        }

        public function updateKegiatan(Request $request, $id)
        {
            $request->validate([
                'nama_kegiatan' => 'required|string|max:255',
            ]);

            $jenis_kegiatan = JenisKegiatan::findOrFail($id);
            $jenis_kegiatan->update([
                'nama_kegiatan' => $request->nama_kegiatan,
            ]);

            return redirect()->route('form.kegiatan.index')->with('success', 'Kegiatan berhasil diperbarui.');
        }

        public function updateAnggota(Request $request, $id)
        {
            $request->validate([
                'anggota_terlibat' => 'required|string|max:255',
            ]);

            $anggota_terlibat = AnggotaTerlibat::findOrFail($id);
            $anggota_terlibat->update([
                'anggota_terlibat' => $request->anggota_terlibat,
            ]);

            return redirect()->route('form.anggota.index')->with('success', 'Anggota berhasil diperbarui.');
        }

        public function updateUnsur(Request $request, $id)
        {
            $request->validate([
                'unsur_terlibat' => 'required|string|max:255',
            ]);

            $unsur_terlibat = UnsurTerlibat::findOrFail($id);
            $unsur_terlibat->update([
                'unsur_terlibat' => $request->unsur_terlibat,
            ]);

            return redirect()->route('form.unsur.index')->with('success', 'Unsur berhasil diperbarui.');
        }

        public function updateSituasi(Request $request, $id)
        {
            $request->validate([
                'situasi_kondisi' => 'required|string|max:255',
            ]);

            $situasi_kondisi = SituasiKondisi::findOrFail($id);
            $situasi_kondisi->update([
                'situasi_kondisi' => $request->situasi_kondisi,
            ]);

            return redirect()->route('form.situasi.index')->with('success', 'Situasi berhasil diperbarui.');
        }

    // Function Hapus Form (Regu, Kegiatan, Anggota, Unsur, Situasi)
        public function destroyRegu($id)
        {
            $regu = ReguLaporan::findOrFail($id);
            $regu->delete();

            return redirect()->route('form.regu.index')->with('success', 'Regu berhasil dihapus.');
        }

        public function destroyKegiatan($id)
        {
            $jenis_kegiatan = JenisKegiatan::findOrFail($id);
            $jenis_kegiatan->delete();

            return redirect()->route('form.kegiatan.index')->with('success', 'Kegiatan berhasil dihapus.');
        }

        public function destroyAnggota($id)
        {
            $anggota_terlibat = AnggotaTerlibat::findOrFail($id);
            $anggota_terlibat->delete();

            return redirect()->route('form.anggota.index')->with('success', 'Anggota berhasil dihapus.');
        }

        public function destroyUnsur($id)
        {
            $unsur_terlibat = UnsurTerlibat::findOrFail($id);
            $unsur_terlibat->delete();

            return redirect()->route('form.unsur.index')->with('success', 'Unsur berhasil dihapus.');
        }

        public function destroySituasi($id)
        {
            $situasi_kondisi = SituasiKondisi::findOrFail($id);
            $situasi_kondisi->delete();

            return redirect()->route('form.situasi.index')->with('success', 'Situasi berhasil dihapus.');
        }
}
