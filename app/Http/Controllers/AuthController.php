<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan View Login
    public function index()
    {
        return view('auth.login');
    }

    // Proses Login
    public function authenticate(Request $request)
    {
        // 1. Validasi Input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 2. Coba Login
        if (Auth::attempt($credentials)) {
            // 3. Regenerate Session (Wajib untuk keamanan & Load Balancing)
            $request->session()->regenerate();

            // 4. Redirect ke dashboard (sesuaikan url tujuannya)
            return redirect()->intended('/mahasiswa'); 
        }

        // 5. Jika gagal, kembalikan dengan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    // Proses Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}