<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Laporan;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function dashboard()
    {
        $jumlahUser = User::count();
        $jumlahLaporan = Laporan::count();

        return view('admin-interface.dashboard', compact('jumlahUser', 'jumlahLaporan'));
    }

    // Tampilkan daftar user
    public function index()
    {
        $users = User::all();
        return view('admin-interface.users-management', compact('users'));
    }

    // Tampilkan form tambah user
    public function createUser()
    {
        return view('admin-interface.add-users'); // View untuk form tambah user
    }

    // Simpan user baru
    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6',
            'role' => 'required|in:admin,user',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan!');
    }

    // Tampilkan form edit
    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin-interface.edit-users', compact('user'));

    }

    // Simpan update user
    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $id,
            'role' => 'required|in:admin,user',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->role = $request->role;

        // Kalau ada password baru, hash dan update
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('users.index')->with('success', 'User berhasil diupdate!');
    }


    // Hapus user
    public function destroyUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User berhasil dihapus!');
    }
}
