<?php

namespace App\Http\Controllers;

use App\Models\form_baptisan;
use Illuminate\Http\Request;

class FormBaptisanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $form_baptisans = form_baptisan::all();
        return view('admin.manajemenJemaat.index', compact('form_baptisans'));

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_Form()
    {
        // return view ("admin.manajemenJemaat.createForm");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_anak' => 'required|string|max:255',
            'nomor_telp' => 'required|string|max:15',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'kelurahan' => 'required|string|max:255',
            'beribadah_di' => 'required|string|max:255',
            'nama_ayah' => 'required|string|max:255',
            'nama_ibu' => 'required|string|max:255',
            'tanggal_baptis' => 'required|date',
            'pembaptis' => 'required|string|max:255',
            'file_foto_pemohon_baptis' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($request->hasFile('file_foto_pemohon_baptis')) {
            $path = $request->file('file_foto_pemohon_baptis')->store('file_foto_pemohon_baptis', 'public');
        } else {
            $path = null;
        }

        form_baptisan::create([
            'nama_anak' => $request->nama_anak,
            'nomor_telp' => $request->nomor_telp,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'kelurahan' => $request->kelurahan,
            'beribadah_di' => $request->beribadah_di,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'tanggal_baptis' => $request->tanggal_baptis,
            'pembaptis' => $request->pembaptis,
            'file_foto_pemohon_baptis' => $path,
        ]);

        return redirect()->route('manajemenJemaat.index')->with('success', 'Data created successfully');



        
        
    
    }

    /**
     * Display the specified resource.
     */
    public function show(form_baptisan $form_baptisan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(form_baptisan $form_baptisan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, form_baptisan $form_baptisan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(form_baptisan $form_baptisan)
    {
        //
    }
}
