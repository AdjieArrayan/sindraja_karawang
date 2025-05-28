@extends('layouts.admin.dashboard-layout')

@section('title', 'Situasi Kondisi')

@section('sidebar')

@section('content')

<main class="main-content p-4">
    <header class="mb-4">
      <h1 class="page-title">Situasi Kondisi</h1>
    </header>

    <section>
        <div class="container-fluid mt-4 p-4 rounded-4 shadow" style="background-color: #fdf1f1; border: 2px solid #007bff;">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="fw-bold" style="color: #4a4a4a; font-family: 'Poppins', sans-serif;">Daftar Situasi</h2>
                <a href="{{ route('form.situasi.create') }}" class="btn btn-dark rounded-3">
                    <i class="ti ti-plus me-1"></i> Tambah Daftar Situasi
                </a>
            </div>

        <table id="regu-table" class="table table-striped table-striped nowrap datatables" style="width:100%">
            <thead>
                <tr>
                    <th>Nomer Situasi</th>
                    <th>Nama Situasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($situasi_kondisi as $sikon)
                    <tr>
                        <td>{{ $sikon->id_situasi }}</td>
                        <td>{{ $sikon->situasi_kondisi }}</td>
                        <td class="d-flex gap-2">
                            <a href="{{ route('form.regu.edit', $sikon->id_situasi) }}" title="Edit">
                                <i class="ti ti-pencil fs-5 text-primary"></i>
                            </a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $sikon->id_situasi }}" title="Delete">
                                <i class="ti ti-trash fs-5" style="color: red;"></i>
                            </a>
                        </td>
                    </tr>

                    <!-- Modal untuk Hapus User -->
                    <div class="modal fade" id="deleteModal-{{ $sikon->id_situasi }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <form method="POST" action="{{ isset($sikon->id_situasi) ? route('form.situasi.destroy', $sikon->id_situasi) : '#' }}">
                            @csrf
                            @method('DELETE')
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content text-center rounded-4 p-4">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <i class="ti ti-alert-circle fs-1" style="color: #a08d37;"></i>
                                    </div>
                                    <h4 class="fw-bold">Peringatan!</h4>
                                    <p class="text-muted fw-semibold">Yakin ingin menghapus <strong>{{ $sikon->situasi_kondisi }}</strong>?</p>
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