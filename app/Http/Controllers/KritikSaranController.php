<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kritikSaran;

class KritikSaranController extends Controller
{
    public function faq() {
        return view('faq');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'nullable|string|max:255',
            'kritikSaran' => 'required|string'
        ]);

        // Simpan data ke database
        kritikSaran::create([
            'name' => $request->hideName ? null : $request->name,
            'kritikSaran' => $request->kritikSaran
        ]);

        // Redirect atau kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Kritik dan saran Anda telah dikirim!');
    }
}
