@extends('layouts.admin.dashboard-layout')

@section('title', 'Anggota Terlibat')

@section('sidebar')

@section('content')

<main class="main-content p-4">
    <header class="mb-4">
      <h1 class="page-title">Anggota Terlibat</h1>
    </header>

    <section>
        <div class="container-fluid mt-4 p-4 rounded-4 shadow" style="background-color: #fdf1f1; border: 2px solid #007bff;">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="fw-bold" style="color: #4a4a4a; font-family: 'Poppins', sans-serif;">Daftar Anggota</h2>
                <a href="{{ route('form.anggota.create') }}" class="btn btn-dark rounded-3">
                    <i class="ti ti-plus me-1"></i> Tambah Anggota
                </a>
            </div>

        <table id="regu-table" class="table table-striped table-striped nowrap datatables" style="width:100%">
            <thead>
                <tr>
                    <th>Nomer Anggota</th>
                    <th>Nama Anggota</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($anggota_terlibat as $anggota)
                    <tr>
                        <td>{{ $anggota->id_anggota }}</td>
                        <td>{{ $anggota->anggota_terlibat }}</td>
                        <td class="d-flex gap-2">
                            <a href="{{ route('form.regu.edit', $anggota->id_anggota) }}" title="Edit">
                                <i class="ti ti-pencil fs-5 text-primary"></i>
                            </a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $anggota->id_anggota }}" title="Delete">
                                <i class="ti ti-trash fs-5" style="color: red;"></i>
                            </a>
                        </td>
                    </tr>

                    <!-- Modal untuk Hapus User -->
                    <div class="modal fade" id="deleteModal-{{ $anggota->id_anggota }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <form method="POST" action="{{ isset($anggota->id_anggota) ? route('form.anggota.destroy', $anggota->id_anggota) : '#' }}">
                            @csrf
                            @method('DELETE')
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content text-center rounded-4 p-4">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <i class="ti ti-alert-circle fs-1" style="color: #a08d37;"></i>
                                    </div>
                                    <h4 class="fw-bold">Peringatan!</h4>
                                    <p class="text-muted fw-semibold">Yakin ingin menghapus <strong>{{ $anggota->anggota_terlibat }}</strong>?</p>
                                    <div class="d-flex justify-content-center gap-3 mt-4">
                                        <button type="submit" class="btn btn-danger px-4">Ya, hapus!</button>
                                        <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Batalkan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                @endforeach
            </tbody>
    </section>

</main>

@endsection