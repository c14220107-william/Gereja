<?php

namespace App\Http\Controllers;

use App\Models\form_penyerahan_anak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function Laravel\Prompts\form;

class form_penyerahan_anak_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $form_penyerahan_anaks = form_penyerahan_anak::all();
        return view('admin.manajemenJemaat.index', compact('form_penyerahan_anaks'));
;    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view("form_penyerahan_anak.create");
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_anak' => 'required|string|max:255',
            'nomor_telp_penanggungjawab_anak' => 'required|string|max:15',
            'tempat_lahir_anak' => 'required|string|max:255',
            'tanggal_lahir_anak' => 'required|date',
            'nama_ayah_anak' => 'required|string|max:255',
            'nama_ibu_anak' => 'required|string|max:255',
            'alamat_anak' => 'required|string|max:255',
            'kelurahan_anak' => 'required|string|max:255',
            'kecamatan_anak' => 'required|string|max:255',
            'asal_gereja_anak' => 'required|string|max:255',
            'lama_ibadah_anak' => 'required|string|max:255',
            'pas_foto_anak' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // dd($request);

        if ($request->hasFile('pas_foto_anak')) {
            $path = $request->file('pas_foto_anak')->store('pas_foto_anak', 'public');
        } else {
            $path = null;
        }

        // Simpan data ke database
        form_penyerahan_anak::create([
            'nama_anak' => $request->nama_anak,
            'nomor_telp_penanggungjawab_anak' => $request->nomor_telp_penanggungjawab_anak,
            'tempat_lahir_anak' => $request->tempat_lahir_anak,
            'tanggal_lahir_anak' => $request->tanggal_lahir_anak,
            'nama_ayah_anak' => $request->nama_ayah_anak,
            'nama_ibu_anak' => $request->nama_ibu_anak,
            'alamat_anak' => $request->alamat_anak,
            'kelurahan_anak' => $request->kelurahan_anak,
            'kecamatan_anak' => $request->kecamatan_anak,
            'asal_gereja_anak' => $request->asal_gereja_anak,
            'lama_ibadah_anak' => $request->lama_ibadah_anak,
            'tempat_asal_dibaptis' => $request->tempat_asal_dibaptis,
            'tanggal_dibaptis_gereja_lama' => $request->tanggal_dibaptis_gereja_lama,
            'nomor_piagam_pernikahan_parent' => $request->nomor_piagam_pernikahan_parent,
            'tanggal_pernikahan' => $request->tanggal_pernikahan,
            'nomor_akte_pernikahan_parent' => $request->nomor_akte_pernikahan_parent,
            'tanggal_akte_pernikahan' => $request->tanggal_akte_pernikahan,
            'pas_foto_anak' => $path,
        ]);


        return redirect()->route('manajemenJemaat.index')->with('success', 'Data Created successfully');

        // form_penyerahan_anak::create($validatedData);
        // return redirect()->route('manajemen_jemaat.index')->with('success','Jemaat berhasil ditambahkan.');

        // // Kembali ke halaman sebelumnya atau redirect dengan pesan sukses
        // return back()->with('success', 'Data berhasil dikirim.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('form_penyerahan_anaks.show', compact('form_penyerahan_anak'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit($id)
    // {
    //     $data = form_penyerahan_anak::findOrFail($id); // Ambil data berdasarkan ID

    //     return view('admin.manajemenJemaat.edit1', compact('data')); // Kirim data ke view edit1.blade.php
    // }
    

    // public function edit(Congregation $congregation)
    // {
    //     return view('admin.congregation.edit', compact('congregation'));
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request , $id)
    {

        $request->validate([
            'nama_anak' => 'required|string|max:255',
            'nomor_telp_penanggungjawab_anak' => 'required|string|max:15',
            'tempat_lahir_anak' => 'required|string|max:255',
            'tanggal_lahir_anak' => 'required|date',
            'nama_ayah_anak' => 'required|string|max:255',
            'nama_ibu_anak' => 'required|string|max:255',
            'alamat_anak' => 'required|string|max:255',
            'kelurahan_anak' => 'required|string|max:255',
            'kecamatan_anak' => 'required|string|max:255',
            'asal_gereja_anak' => 'required|string|max:255',
            'lama_ibadah_anak' => 'required|string|max:255',
            'pas_foto_anak' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        

        $form = form_penyerahan_anak::findorFail($id);
    
        if ($request->hasFile('pas_foto_anak')) {
            // Hapus foto lama jika ada
            if ($form->pas_foto_anak && Storage::exists('public/' . $form->pas_foto_anak)) {
                Storage::delete('public/' . $form->pas_foto_anak);
            }
    
            // Simpan foto baru
            $path = $request->file('pas_foto_anak')->store('pas_foto_anak', 'public');
        } else {
            $path = $form->pas_foto_anak; // tetap gunakan path foto lama jika tidak ada foto baru
        }
    
        // Update data di database
        $form->update([
            'nama_anak' => $request->nama_anak,
            'nomor_telp_penanggungjawab_anak' => $request->nomor_telp_penanggungjawab_anak,
            'tempat_lahir_anak' => $request->tempat_lahir_anak,
            'tanggal_lahir_anak' => $request->tanggal_lahir_anak,
            'nama_ayah_anak' => $request->nama_ayah_anak,
            'nama_ibu_anak' => $request->nama_ibu_anak,
            'alamat_anak' => $request->alamat_anak,
            'kelurahan_anak' => $request->kelurahan_anak,
            'kecamatan_anak' => $request->kecamatan_anak,
            'asal_gereja_anak' => $request->asal_gereja_anak,
            'lama_ibadah_anak' => $request->lama_ibadah_anak,
            'tempat_asal_dibaptis' => $request->tempat_asal_dibaptis,
            'tanggal_dibaptis_gereja_lama' => $request->tanggal_dibaptis_gereja_lama,
            'nomor_piagam_pernikahan_parent' => $request->nomor_piagam_pernikahan_parent,
            'tanggal_pernikahan' => $request->tanggal_pernikahan,
            'nomor_akte_pernikahan_parent' => $request->nomor_akte_pernikahan_parent,
            'tanggal_akte_pernikahan' => $request->tanggal_akte_pernikahan,
            'pas_foto_anak' => $path,
        ]);
    
        return redirect()->back()->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(form_penyerahan_anak $form_penyerahan_anak)
    {
        $form_penyerahan_anak->delete();
        return redirect()->route('manajemenJemaat.index')->with('success', 'Jemaat berhasil dihapus.');
    }
}
