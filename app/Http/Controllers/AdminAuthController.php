<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');  // buat tampilan login admin
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (auth()->user()->role == 'admin') {
                return redirect()->intended('/admin/dashboard');
            } else {
                // Auth::logout();
                // return redirect('/admin/login')->withErrors('Anda bukan admin.');
                return redirect('/');
            }
        } 

        return redirect()->back()->withErrors('Email atau password salah.');
    }

    public function showRegistrationForm()
{
    return view('admin.register'); // Tampilkan view registrasi
}

public function register(Request $request)
{
    // Validasi input
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);


    $role = 'user';
    if (strpos($request->email, '@gppsbethlehem.com') !== false) {
        $role = 'admin';  
    }

    // Buat user baru
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = bcrypt($request->password); // Hash password
    $user->role = $role; // Set role sebagai admin
    $user->save();

    // Redirect ke login setelah registrasi
    return redirect()->route('admin.login')->with('success', 'Admin berhasil terdaftar. Silakan login.');
}



}
