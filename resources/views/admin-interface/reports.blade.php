@extends('layouts.admin.dashboard-layout')

@section('title', 'Report')

@section('sidebar')

@section('content')

<main class="main-content p-4">
    <header class="mb-4">
      <h1 class="page-title">Laporan</h1>
    </header>

    <section>
        <div class="container-fluid mt-4 p-4 rounded-4 shadow" style="background-color: #fdf1f1; border: 2px solid #007bff;">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="fw-bold" style="color: #4a4a4a; font-family: 'Poppins', sans-serif;">Daftar Pelapor</h2>
            </div>

        <table id="report" class="table table-striped nowrap datatables" style="width:100%">
            <thead>
                <tr>
                    <th>Nomer Laporan</th>
                    <th>Nama Pelapor</th>
                    <th>Jenis Kegiatan</th>
                    <th>Tanggal Kegiatan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($laporan as $item)
                    <tr>
                        <td>{{ $item->id_laporan }}</td>
                        <td>{{ $item->nama_pelapor }}</td>
                        <td>{{ $item->jenis_kegiatan }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->tanggal_kegiatan)->format('d/m/Y') }}</td>
                        <td class="d-flex gap-2">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalDetailLaporan{{ $item->id_laporan }}" title="View">
                                <i class="bi bi-eye fs-5" style="color: black;"></i>
                            </a>
                            <a href="{{ route('laporan.pdf', $item->id_laporan) }}" title="Download">
                                <i class="bi bi-cloud-download fs-5" style="color: green;"></i>
                            </a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id_laporan }}" title="Delete">
                                <i class="bi bi-trash fs-5" style="color: red;"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach

        @foreach ($laporan as $item)
        <!-- Modal Detail -->
        <div id="modalDetailLaporan{{ $item->id_laporan }}" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content rounded-4 shadow-lg border-0">
                    <div class="modal-body p-5">
                        <div class="d-flex justify-content-between align-items-start mb-4">
                            <h4 class="fw-bold">
                                Detail Laporan <i class="ti ti-file-description"></i>
                            </h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 mb-2"><strong class="text-muted">Nama Pelapor</strong><br>{{ $item->nama_pelapor }}</div>
                            <div class="col-md-6 mb-2"><strong class="text-muted">Regu Pelapor</strong><br>{{ $item->regu_pelapor }}</div>
                            <div class="col-md-6 mb-2"><strong class="text-muted">Jenis Kegiatan</strong><br>{{ $item->jenis_kegiatan }}</div>
                            <div class="col-md-6 mb-2"><strong class="text-muted">Tanggal dan Waktu Kegiatan</strong><br>{{ \Carbon\Carbon::parse($item->tanggal_kegiatan)->format('d-m-Y') }} {{ $item->waktu_kegiatan }}</div>
                            <div class="col-md-6 mb-2"><strong class="text-muted">Lokasi Kegiatan</strong><br>{{ $item->lokasi_kegiatan }}</div>
                            <div class="col-md-6 mb-2"><strong class="text-muted">Anggota Terlibat</strong><br>{{ $item->anggota_terlibat }}</div>
                            <div class="col-md-6 mb-2"><strong class="text-muted">Dokumentasi</strong><br>
                                <img src="{{ public_path('storage/' . $item->dokumentasi_laporan) }}" class="img-doc" alt="Dokumentasi Kegiatan">
                            </div>
                        </div>
                        <div>
                            <strong class="text-muted">Laporan Singkat</strong><br>
                            <p class="mt-2 mb-0">{{ $item->laporan_singkat }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


        @foreach ($laporan as $item)
        <!-- Modal Delete -->
        <div class="modal fade" id="deleteModal{{ $item->id_laporan }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-center rounded-4 p-4">
                    <div class="modal-body">
                        <div class="mb-3">
                            <i class="ti ti-alert-circle fs-1" style="color: #a08d37;"></i>
                        </div>
                        <h4 class="fw-bold">Peringatan!</h4>
                        <p class="text-muted fw-semibold">Apakah Anda yakin ingin menghapus data ini?</p>
                        <form action="{{ route('report.destroy', $item->id_laporan) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="d-flex justify-content-center gap-3 mt-4">
                                <button type="submit" class="btn btn-danger px-4">Ya, hapus!</button>
                                <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Batalkan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        @endforeach
    </tbody>
    </section>
</main>

<script>
    $(document).ready(function() {
        $('#tabelLaporan').DataTable({
            order: [[0, 'asc']] // Kolom pertama (ID) diurutkan ascending
        });
    });
</script>


@endsection