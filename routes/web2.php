<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RoleMiddleware;

Route::get('/', function () {
    return view('landing');
});

// Login Route

    Route::get('/login-form', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Mencegah akses ke halaman dari role lain
    Route::middleware(['auth', RoleMiddleware::class.':user'])->group(function () {
        Route::view('/user-main', 'user.main');
    });

// Route untuk fitur user
    Route::get('/user-main', function () {
        return view('user-interface.user-main');
    });

    Route::get('/testlaporan2', function () {
        return view('user-interface.laporan.testlaporan2');
    });

//Route untuk Dashboard Admin
    Route::middleware(['auth', 'role:admin'])->group(function () {
        Route::get('/admin-dashboard', function () {
            return view('admin-interface.dashboard');
        });

        Route::get('/user-management', [UserController::class, 'index'])
            ->name('admin-interface.users-management');

        Route::get('/edit-user', function () {
            return view('admin-interface.edit-users');
        });

        Route::get('/add-user', function () {
            return view('admin-interface.add-users');
        });

        Route::get('/report', function () {
            return view('admin-interface.reports');
        });

        Route::get('/edit-report', function () {
            return view('admin-interface.edit-reports');
        });
    });
// Route untuk Form Aduan Masyarakat
    Route::post('/laporan/store', [LaporanController::class, 'store'])->name('laporan.store');

    Route::get('/form-laporan', function () {
        return view('user-interface.laporan.form-laporan');
    });

    Route::get('/success-form', function () {
        return view('user-interface.laporan.success-form');
    });

    Route::get('/mobile-form', function () {
        return view('user-interface.laporan.mobile-form');
    });

    Route::post('/submit-laporan', [LaporanController::class, 'store'])->name('laporan.store');
    Route::post('/laporan/store', [LaporanController::class, 'store'])->name('laporan.store');

    Route::get('/success-form/{id}', [LaporanController::class, 'successForm'])->name('success.form');
    Route::get('/success-laporan/{id}', [LaporanController::class, 'success'])->name('success.laporan');
    Route::get('/download-pdf/{id}', [LaporanController::class, 'downloadPDF'])->name('download.laporan.pdf');