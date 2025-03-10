<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

// Login Route
    Route::get('/login-form', function () {
        return view('auth.login-form');
    });

// Route untuk fitur user
    Route::get('/user-main', function () {
        return view('user-interface.user-main');
    });

    Route::get('/testlaporan', function () {
        return view('user-interface.laporan.testlaporan');
    });

// Route untuk Form Aduan Masyarakat
    Route::get('/form-laporan', function () {
        return view('user-interface.laporan.form-laporan');
    });

    Route::get('/form-laporan2', function () {
        return view('user-interface.laporan.form-laporan-2');
    });

    Route::get('/form-laporan3', function () {
        return view('user-interface.laporan.form-laporan-3');
    });

    Route::get('/form-laporan4', function () {
        return view('user-interface.laporan.form-laporan-4');
    });

    Route::get('/success-form', function () {
        return view('user-interface.laporan.success-form');
    });


