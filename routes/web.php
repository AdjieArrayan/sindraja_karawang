<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\FormController;

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

    Route::prefix('form')->name('form.')->group(function () {
        Route::get('/regu', [FormController::class, 'indexRegu'])->name('regu.index');
        Route::get('/regu/create', [FormController::class, 'createRegu'])->name('regu.create');
        Route::post('/regu', [FormController::class, 'storeRegu'])->name('regu.store');
        Route::get('/regu/{id}/edit', [FormController::class, 'editRegu'])->name('regu.edit');
        Route::put('/regu/{id}', [FormController::class, 'updateRegu'])->name('regu.update');
        Route::delete('/regu/{id}', [FormController::class, 'destroyRegu'])->name('regu.destroy');

        Route::get('/kegiatan', [FormController::class, 'indexKegiatan'])->name('kegiatan.index');
        Route::get('/kegiatan/create', [FormController::class, 'createKegiatan'])->name('kegiatan.create');
        Route::post('/kegiatan', [FormController::class, 'storeKegiatan'])->name('kegiatan.store');
        Route::get('/kegiatan/{id}/edit', [FormController::class, 'editKegiatan'])->name('kegiatan.edit');
        Route::put('/kegiatan/{id}', [FormController::class, 'updateKegiatan'])->name('kegiatan.update');
        Route::delete('/kegiatan/{id}', [FormController::class, 'destroyKegiatan'])->name('kegiatan.destroy');

        Route::get('/anggota', [FormController::class, 'indexAnggota'])->name('anggota.index');
        Route::get('/anggota/create', [FormController::class, 'createAnggota'])->name('anggota.create');
        Route::post('/anggota', [FormController::class, 'storeAnggota'])->name('anggota.store');
        Route::get('/anggota/{id}/edit', [FormController::class, 'editAnggota'])->name('anggota.edit');
        Route::put('/anggota/{id}', [FormController::class, 'updateAnggota'])->name('anggota.update');
        Route::delete('/anggota/{id}', [FormController::class, 'destroyAnggota'])->name('anggota.destroy');

        Route::get('/unsur', [FormController::class, 'indexUnsur'])->name('unsur.index');
        Route::get('/unsur/create', [FormController::class, 'createUnsur'])->name('unsur.create');
        Route::post('/unsur', [FormController::class, 'storeUnsur'])->name('unsur.store');
        Route::get('/unsur/{id}/edit', [FormController::class, 'editUnsur'])->name('unsur.edit');
        Route::put('/unsur/{id}', [FormController::class, 'updateUnsur'])->name('unsur.update');
        Route::delete('/unsur/{id}', [FormController::class, 'destroyUnsur'])->name('unsur.destroy');

        Route::get('/situasi', [FormController::class, 'indexSituasi'])->name('situasi.index');
        Route::get('/situasi/create', [FormController::class, 'createSituasi'])->name('situasi.create');
        Route::post('/situasi', [FormController::class, 'storeSituasi'])->name('situasi.store');
        Route::get('/situasi/{id}/edit', [FormController::class, 'editSituasi'])->name('situasi.edit');
        Route::put('/situasi/{id}', [FormController::class, 'updateSituasi'])->name('situasi.update');
        Route::delete('/situasi/{id}', [FormController::class, 'destroySituasi'])->name('situasi.destroy');
    });

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

