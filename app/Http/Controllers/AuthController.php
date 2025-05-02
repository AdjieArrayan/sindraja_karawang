<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login-form');
    }

    public function login(Request $request)
    {
        Log::info('Mencoba login', $request->only('username'));

        $credentials = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            Log::info('Login berhasil', ['user' => Auth::user()]);

            $request->session()->regenerate();

            $role = strtolower(Auth::user()->role);
            Log::info("Role: $role");

            if ($role === 'admin') {
                return redirect('/admin-dashboard');
            } elseif ($role === 'user') {
                return redirect('/user-main');
            } else {
                Auth::logout();
                return redirect('/login-form')->withErrors([
                    'role' => 'Role tidak dikenali.',
                ]);
            }
        }

        Log::warning('Login gagal');
        return back()->withErrors(['loginError' => 'Username atau password salah.']);
    }

    public function loginAsGuest(Request $request)
    {
        Auth::logout();

        $guest = \App\Models\User::where('username', 'guest')->first();

        if (!$guest) {
            abort(500, 'Guest user tidak ditemukan di database.');
        }

        Auth::login($guest);

        $request->session()->regenerate();

        return redirect('/user-main');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Login ulang sebagai guest
        $guest = \App\Models\User::where('username', 'guest')->first();

        if (!$guest) {
            abort(500, 'Guest user tidak ditemukan di database.');
        }

        Auth::login($guest);
        $request->session()->regenerate();

        return redirect('/user-main');
    }

}
