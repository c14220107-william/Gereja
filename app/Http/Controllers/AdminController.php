<?php

namespace App\Http\Controllers;

use App\Models\form_baptisan;
use App\Models\form_penyerahan_anak;
use App\Models\form_pernikahan;
use App\Models\kritikSaran;
use App\Models\Persembahan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard() {

        $totalAllPersembahan = Persembahan::sum('jumlah');
        $form_penyerahan_anak = form_penyerahan_anak::count();
        $form_pernikahan = form_pernikahan::count();
        $form_baptisan = form_baptisan::count();
        $form_kritikSaran = kritikSaran::count();
        

        return view('admin.dashboard', compact('totalAllPersembahan','form_penyerahan_anak','form_pernikahan','form_baptisan','form_kritikSaran'));
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
