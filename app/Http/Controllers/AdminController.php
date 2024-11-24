<?php

namespace App\Http\Controllers;

use App\Models\Persembahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard() {

        $totalAllPersembahan = Persembahan::sum('jumlah'); // Mengambil jumlah total dari semua persembahan
        return view('admin.dashboard', compact('totalAllPersembahan'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    public function indexPersembahan(){
        
    }
}
