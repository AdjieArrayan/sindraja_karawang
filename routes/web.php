<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LaporanController;

//Landing
Route::get('/', function () {
    return view('landing');
});

// Auth
Route::get('/login-form', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/guest-login', [AuthController::class, 'loginAsGuest'])->name('guest.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Group
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin-dashboard', [UserController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/user-management', [UserController::class, 'index'])->name('users.index');
    Route::get('/add-user', [UserController::class, 'createUser'])->name('users.create');
    Route::put('/user-management', [UserController::class, 'storeUser'])->name('users.store');
    Route::get('/edit-user/{id}', [UserController::class, 'editUser'])->name('users.edit');
    Route::put('/user-management/{id}', [UserController::class, 'updateUser'])->name('users.update');
    Route::delete('/user-management/{id}', [UserController::class, 'destroyUser'])->name('users.destroy');

    Route::get('/report', [LaporanController::class, 'index'])->name('report.index');
    Route::delete('/report/{id}', [LaporanController::class, 'destroyLaporan'])->name('report.destroy');
});

// User Group (Kalo Guest Bisa Bikin Laporan)
Route::middleware(['auth', 'role:user,guest'])->group(function () {
    Route::get('/user-main', function () {
        return view('user-interface.user-main');
    });

    Route::get('/form-laporan', [LaporanController::class, 'createLaporan'])->name('laporan.create');
    Route::post('/form-laporan', [LaporanController::class, 'storeLaporan'])->name('laporan.store');
    Route::get('/success-form/{id_laporan}', [LaporanController::class, 'successForm'])->name('success.form');
});

// Untuk user dan guest (Kalo Guest Ga Bisa Bikin Laporan)
// Route::middleware(['auth', 'role:user,guest'])->get('/user-main', function () {
//    return view('user-interface.user-main');
// });

// Hanya untuk user
// Route::middleware(['auth', 'role:user'])->group(function () {
//    Route::get('/form-laporan', [LaporanController::class, 'createLaporan'])->name('laporan.create');
//    Route::post('/form-laporan', [LaporanController::class, 'storeLaporan'])->name('laporan.store');
//    Route::get('/success-form/{id_laporan}', [LaporanController::class, 'successForm'])->name('success.form');
// });

// PDF bisa diakses oleh user atau admin
Route::middleware(['auth'])->get('/generate-pdf/{id_laporan}', [LaporanController::class, 'previewPDF'])->name('laporan.pdf');

