@extends('layouts.admin.dashboard-layout')

@section('title', 'Edit Pengguna')

@section('sidebar')

@section('content')
    <main class="main-content p-4">
        <header class="mb-4 d-flex justify-content-between align-items-center">
            <h1 class="page-title">Users</h1>
            <a href="{{ route('users.index') }}" class="btn btn-outline-dark rounded-pill fw-bold">
                <i class="bi bi-arrow-left-circle"></i> Kembali
            </a>
        </header>

            <div class="container-fluid mt-4 p-4 rounded-4 shadow" style="background-color: #fdf1f1; border: 2px solid #007bff;">
                <h4 class="fw-bold mb-4">Mengedit Data Pengguna</h4>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form method="POST" action="{{ route('users.update', $user->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="fullname" class="form-label fw-semibold">Nama Lengkap</label>
                        <input type="text" name="name" class="form-control border border-2" id="fullname"
                               value="{{ $user->name }}" placeholder="Masukkan Nama Lengkap">
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label fw-semibold">Username</label>
                        <input type="text" name="username" class="form-control border border-2" id="username"
                               value="{{ $user->username }}" placeholder="Masukkan Username">
                    </div>

                    <div class="mb-3">
                        <label for="nip" class="form-label fw-semibold">NIP</label>
                        <input type="text" name="nip" class="form-control border border-2" id="nip"
                               value="{{ $user->nip }}" placeholder="Masukkan NIP">
                    </div>

                    <div class="mb-3">
                        <label for="jabatan" class="form-label fw-semibold">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control border border-2" id="jabatan"
                               value="{{ $user->jabatan }}" placeholder="Masukkan Jabatan">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold">Password</label>
                        <input type="password" name="password" class="form-control border border-2" id="password"
                               placeholder="Kosongkan jika tidak diubah">
                    </div>

                    <div class="mb-4">
                        <label for="role" class="form-label fw-semibold">Role</label>
                        <select name="role" class="form-select border border-2" id="role">
                            <option selected disabled>Pilih Role</option>
                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                        </select>
                    </div>

                    <button type="submit" class="btn text-white w-100" style="background-color: #9b935c;">
                        <i class="bi bi-pencil-square me-2"></i> Edit
                    </button>
                </form>

            </div>
        </div>
    </main>
@endsection
