<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\manajemen_jemaat;

class jemaatNew extends Controller
{
    public function index()
    {
        $manajemen_jemaat = manajemen_jemaat::all();
        return view('admin.jemaatNew.index', compact('manajemen_jemaat'));
    }

    public function store(Request $request)
    {
        manajemen_jemaat::create([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nomor_telp' => $request->nomor_telp,
            'alamat' => $request->alamat,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
}
