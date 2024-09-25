<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function form() {
        return view('service-registration');
    }
    
    public function register(Request $request) {
        // Proses pendaftaran
    }
}
