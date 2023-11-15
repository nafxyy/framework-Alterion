<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerAction(Request $request)
    {
        if ($request->password == $request->confirm_password) {
            $usernameExist = User::where("username", $request->username)->first();
            if ($usernameExist) {
                session()->flash('error', 'Username sudah digunakan!');
                return redirect('/register');
            }
            User::create([
                'name' => $request->name,
                'username' => $request->username,
                'password' => Hash::make($request->password),
            ]);
            session()->flash('success', 'Akun berhasil dibuat!');
            return redirect('/register');
        } else {
            session()->flash('error', 'Konfirmasi password anda salah!');
            return redirect('/register');
        }
    }

    public function loginAction(Request $request)
{
    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
        // Login berhasil

        // Cek apakah pengguna memiliki peran sebagai admin
        if (Auth::user()->username === 'admin') {
            return redirect('/staff/dashboard');
        } else {
            return redirect('/');
        }
    } else {
        // Login gagal
        session()->flash('error', 'Username atau Password anda salah!');
        return redirect('/authentication');
    }
}

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
