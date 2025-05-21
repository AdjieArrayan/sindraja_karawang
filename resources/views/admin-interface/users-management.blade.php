@extends('layouts.admin.dashboard-layout')

@section('title', 'User Management')

@section('sidebar')

@section('content')

<main class="main-content p-4">
    <header class="mb-4">
      <h1 class="page-title">Users</h1>
    </header>

    <section>
        <div class="container-fluid mt-4 p-4 rounded-4 shadow" style="background-color: #fdf1f1; border: 2px solid #007bff;">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="fw-bold" style="color: #4a4a4a; font-family: 'Poppins', sans-serif;">Daftar Pengguna</h2>
                <a href="{{ route('users.create') }}" class="btn btn-dark rounded-3">
                    <i class="ti ti-plus me-1"></i> Tambah Pengguna
                </a>
            </div>

        <table id="user-management" class="table table-striped nowrap datatables" style="width:100%">
            <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Username</th>
                    <th>NIP</th>
                    <th>Jabatan</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->nip }}</td>
                        <td>{{ $user->jabatan }}</td>
                        <td>{{ ucfirst($user->role) }}</td>
                        <td class="d-flex gap-2">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#detailModal-{{ $user->id }}" title="View">
                                <i class="ti ti-eye fs-5" style="color: black;"></i>
                            </a>
                            <a href="{{ route('users.edit', ['id' => $user->id]) }}" title="Edit">
                                <i class="ti ti-pencil fs-5" style="color: blueviolet;"></i>
                            </a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $user->id }}" title="Delete">
                                <i class="ti ti-trash fs-5" style="color: red;"></i>
                            </a>
                        </td>
                    </tr>

                    <!-- Modal Untuk Detail Pengguna -->
                    <div class="modal fade" id="detailModal-{{ $user->id }}" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content rounded-4 p-3 shadow">
                                <div class="modal-header border-0">
                                    <h5 class="modal-title fw-bold" id="detailModalLabel">
                                        Detail Pengguna <i class="ti ti-users"></i>
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: black;"></button>
                                </div>
                                <div class="modal-body text-start px-4 pb-4">
                                    <p><strong class="text-muted">Nama Lengkap</strong><br>{{ $user->name }}</p>
                                    <p><strong class="text-muted">Username</strong><br>{{ $user->username }}</p>
                                    <p><strong class="text-muted">NIP</strong><br>{{ $user->nip }}</p>
                                    <p><strong class="text-muted">Jabatan</strong><br>{{ $user->jabatan }}</p>
                                    <p><strong class="text-muted">Role</strong><br>{{ ucfirst($user->role) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal untuk Hapus User -->
                    <div class="modal fade" id="deleteModal-{{ $user->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <form method="POST" action="{{ isset($user->id) ? route('users.destroy', $user->id) : '#' }}">
                            @csrf
                            @method('DELETE')
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content text-center rounded-4 p-4">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <i class="ti ti-alert-circle fs-1" style="color: #a08d37;"></i>
                                    </div>
                                    <h4 class="fw-bold">Peringatan!</h4>
                                    <p class="text-muted fw-semibold">Yakin ingin menghapus <strong>{{ $user->name }}</strong>?</p>
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