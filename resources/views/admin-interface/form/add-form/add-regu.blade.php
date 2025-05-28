@extends('layouts.admin.dashboard-layout')

@section('title', 'Tambah Regu')

@section('sidebar')

@section('content')
    <main class="main-content p-4">
        <header class="mb-4 d-flex justify-content-between align-items-center">
            <h1 class="page-title">Regu</h1>
            <a href="{{ route('form.regu.index') }}" class="btn btn-outline-dark rounded-pill fw-bold">
                <i class="bi bi-arrow-left-circle"></i> Kembali
            </a>
        </header>

            <div class="container-fluid mt-4 p-4 rounded-4 shadow" style="background-color: #fdf1f1; border: 2px solid #007bff;">
                <h4 class="fw-bold mb-4">Menambah Data Regu</h4>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form method="POST" action="{{ route('form.regu.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="fullname" class="form-label fw-semibold">Nama Regu</label>
                        <input type="text" name="nama_regu" class="form-control border border-2" id="namaregu" placeholder="Masukkan Nama Regu">
                    </div>

                    <button type="submit" class="btn text-white w-100" style="background-color: #9b935c;">
                        <i class="bi bi-plus-square me-2"></i> Tambah Regu
                    </button>
                </form>

            </div>
        </div>
    </main>

@endsection