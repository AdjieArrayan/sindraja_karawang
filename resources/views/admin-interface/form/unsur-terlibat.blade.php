@extends('layouts.admin.dashboard-layout')

@section('title', 'Anggota Terlibat')

@section('sidebar')

@section('content')

<main class="main-content p-4">
    <header class="mb-4">
      <h1 class="page-title">Unsur Terlibat</h1>
    </header>

    <section>
        <div class="container-fluid mt-4 p-4 rounded-4 shadow" style="background-color: #fdf1f1; border: 2px solid #007bff;">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="fw-bold" style="color: #4a4a4a; font-family: 'Poppins', sans-serif;">Daftar Unsur</h2>
                <a href="{{ route('form.unsur.create') }}" class="btn btn-dark rounded-3">
                    <i class="ti ti-plus me-1"></i> Tambah Unsur
                </a>
            </div>

        <table id="regu-table" class="table table-striped table-striped nowrap datatables" style="width:100%">
            <thead>
                <tr>
                    <th>Nomer Unsur</th>
                    <th>Nama Unsur</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($unsur_terlibat as $unsur)
                    <tr>
                        <td>{{ $unsur->id_unsur }}</td>
                        <td>{{ $unsur->unsur_terlibat }}</td>
                        <td class="d-flex gap-2">
                            <a href="{{ route('form.regu.edit', $unsur->id_unsur) }}" title="Edit">
                                <i class="ti ti-pencil fs-5 text-primary"></i>
                            </a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $unsur->id_unsur }}" title="Delete">
                                <i class="ti ti-trash fs-5" style="color: red;"></i>
                            </a>
                        </td>
                    </tr>

                    <!-- Modal untuk Hapus User -->
                    <div class="modal fade" id="deleteModal-{{ $unsur->id_unsur }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <form method="POST" action="{{ isset($unsur->id_unsur) ? route('form.unsur.destroy', $unsur->id_unsur) : '#' }}">
                            @csrf
                            @method('DELETE')
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content text-center rounded-4 p-4">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <i class="ti ti-alert-circle fs-1" style="color: #a08d37;"></i>
                                    </div>
                                    <h4 class="fw-bold">Peringatan!</h4>
                                    <p class="text-muted fw-semibold">Yakin ingin menghapus <strong>{{ $unsur->unsur_terlibat }}</strong>?</p>
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