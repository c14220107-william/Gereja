<?php

namespace App\Http\Controllers;

use App\Models\form_pernikahan;
use Illuminate\Http\Request;

class form_pernikahan_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.manajemenJemaat.index', compact('form_pernikahans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("form_pernikahans.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'hari_pemberkatan' => 'required|string|max:255',
        //     'tanggal_pemberkatan' => 'required|date',
        //     'pukul_pemberkatan' => 'required|string|max:10',
        //     'permohonan_pemberkatan1' => 'nullable|boolean',
        //     'permohonan_pemberkatan2' => 'nullable|boolean',
        //     'nama_calon_mempelai_pria' => 'required|string|max:255',
        //     'nomor_telp_calon_mempelai_pria' => 'required|string|max:15',
        //     'alamat_calon_mempelai_pria' => 'required|string|max:255',
        //     'tempat_lahir_calon_mempelai_pria' => 'required|string|max:255',
        //     'tanggal_lahir_calon_mempelai_pria' => 'required|date',
        //     'nomor_ktp_calon_mempelai_pria' => 'required|string|max:255',
        //     'nomor_surat_baptis_calon_mempelai_pria' => 'required|string|max:255',
        //     'asal_gereja_baptis_calon_mempelai_pria' => 'required|string|max:255',
        //     'gereja_sekarang_calon_mempelai_pria' => 'required|string|max:255',
        //     'pekerjaan_calon_mempelai_pria' => 'required|string|max:255',
        //     'alamat_pekerjaan_calon_mempelai_pria' => 'nullable|string|max:255',
        //     'telp_pekerjaan_calon_mempelai_pria' => 'nullable|string|max:15',
        //     'nama_ayah_calon_mempelai_pria' => 'required|string|max:255',
        //     'nama_ibu_calon_mempelai_pria' => 'required|string|max:255',
        //     'alamat_orangtua_calon_mempelai_pria' => 'required|string|max:255',
        //     'nomor_telp_orangtua_calon_mempelai_pria' => 'nullable|string|max:15',
        //     'persetujuan_orangtua_calon_mempelai_pria' => 'nullable|boolean',
        //     'riwayat_calon_mempelai_pria' => 'nullable|boolean',
        //     'status_calon_mempelai_pria' => 'nullable|boolean',
        //     'nama_calon_mempelai_wanita' => 'required|string|max:255',
        //     'nomor_telp_calon_mempelai_wanita' => 'required|string|max:15',
        //     'alamat_calon_mempelai_wanita' => 'required|string|max:255',
        //     'tempat_lahir_calon_mempelai_wanita' => 'required|string|max:255',
        //     'tanggal_lahir_calon_mempelai_wanita' => 'required|date',
        //     'nomor_ktp_calon_mempelai_wanita' => 'required|string|max:255',
        //     'nomor_surat_baptis_calon_mempelai_wanita' => 'required|string|max:255',
        //     'asal_gereja_baptis_calon_mempelai_wanita' => 'required|string|max:255',
        //     'gereja_sekarang_calon_mempelai_wanita' => 'required|string|max:255',
        //     'pekerjaan_calon_mempelai_wanita' => 'required|string|max:255',
        //     'alamat_pekerjaan_calon_mempelai_wanita' => 'nullable|string|max:255',
        //     'telp_pekerjaan_calon_mempelai_wanita' => 'nullable|string|max:15',
        //     'nama_ayah_calon_mempelai_wanita' => 'required|string|max:255',
        //     'nama_ibu_calon_mempelai_wanita' => 'required|string|max:255',
        //     'alamat_orangtua_calon_mempelai_wanita' => 'required|string|max:255',
        //     'persetujuan_orangtua_calon_mempelai_wanita' => 'nullable|boolean',
        //     'riwayat_calon_mempelai_wanita' => 'nullable|boolean',
        //     'status_calon_mempelai_wanita' => 'nullable|boolean',
        //     'cek_surat_sipil' => 'nullable|boolean',
        //     'file_surat_catatan_sipil' => 'nullable|file|mimes:pdf|max:2048'
        // ]);

        if ($request->hasFile('file_surat_catatan_sipil')) {
            $filePath = $request->file('file_surat_catatan_sipil')->store('file_surat_catatan_sipil', 'public');
        } else {
            $filePath = null;
        }

        $permohonan_pemberkatan1 = $request->has('permohonan_pemberkatan1') ? 1 : 0;
        $permohonan_pemberkatan2 = $request->has('permohonan_pemberkatan2') ? 1 : 0;
        $persetujuan_orangtua_calon_mempelai_pria = $request->has('persetujuan_orangtua_calon_mempelai_pria') ? 1 : 0;
        $riwayat_calon_mempelai_pria = $request->has('riwayat_calon_mempelai_pria') ? 1 : 0;
        $status_calon_mempelai_pria = $request->has('status_calon_mempelai_pria') ? 1 : 0;
        $persetujuan_orangtua_calon_mempelai_wanita = $request->has('persetujuan_orangtua_calon_mempelai_wanita') ? 1 : 0;
        $riwayat_calon_mempelai_wanita = $request->has('riwayat_calon_mempelai_wanita') ? 1 : 0;
        $status_calon_mempelai_wanita = $request->has('status_calon_mempelai_wanita') ? 1 : 0;
        $cek_surat_sipil = $request->has('cek_surat_sipil') ? 1 : 0;

        form_pernikahan::create([
            'hari_pemberkatan' => $request->hari_pemberkatan,
            'tanggal_pemberkatan' => $request->tanggal_pemberkatan,
            'pukul_pemberkatan' => $request->pukul_pemberkatan,
            'permohonan_pemberkatan1' => $permohonan_pemberkatan1,
            'permohonan_pemberkatan2' => $permohonan_pemberkatan2,
            'nama_calon_mempelai_pria' => $request->nama_calon_mempelai_pria,
            'nomor_telp_calon_mempelai_pria' => $request->nomor_telp_calon_mempelai_pria,
            'alamat_calon_mempelai_pria' => $request->alamat_calon_mempelai_pria,
            'tempat_lahir_calon_mempelai_pria' => $request->tempat_lahir_calon_mempelai_pria,
            'tanggal_lahir_calon_mempelai_pria' => $request->tanggal_lahir_calon_mempelai_pria,
            'nomor_ktp_calon_mempelai_pria' => $request->nomor_ktp_calon_mempelai_pria,
            'nomor_surat_baptis_calon_mempelai_pria' => $request->nomor_surat_baptis_calon_mempelai_pria,
            'asal_gereja_baptis_calon_mempelai_pria' => $request->asal_gereja_baptis_calon_mempelai_pria,
            'gereja_sekarang_calon_mempelai_pria' => $request->gereja_sekarang_calon_mempelai_pria,
            'pekerjaan_calon_mempelai_pria' => $request->pekerjaan_calon_mempelai_pria,
            'alamat_pekerjaan_calon_mempelai_pria' => $request->alamat_pekerjaan_calon_mempelai_pria,
            'telp_pekerjaan_calon_mempelai_pria' => $request->telp_pekerjaan_calon_mempelai_pria,
            'nama_ayah_calon_mempelai_pria' => $request->nama_ayah_calon_mempelai_pria,
            'nama_ibu_calon_mempelai_pria' => $request->nama_ibu_calon_mempelai_pria,
            'alamat_orangtua_calon_mempelai_pria' => $request->alamat_orangtua_calon_mempelai_pria,
            'nomor_telp_orangtua_calon_mempelai_pria' => $request->nomor_telp_orangtua_calon_mempelai_pria,
            'persetujuan_orangtua_calon_mempelai_pria' => $persetujuan_orangtua_calon_mempelai_pria,
            'riwayat_calon_mempelai_pria' => $riwayat_calon_mempelai_pria,
            'status_calon_mempelai_pria' => $status_calon_mempelai_pria,
            'nama_calon_mempelai_wanita' => $request->nama_calon_mempelai_wanita,
            'nomor_telp_calon_mempelai_wanita' => $request->nomor_telp_calon_mempelai_wanita,
            'alamat_calon_mempelai_wanita' => $request->alamat_calon_mempelai_wanita,
            'tempat_lahir_calon_mempelai_wanita' => $request->tempat_lahir_calon_mempelai_wanita,
            'tanggal_lahir_calon_mempelai_wanita' => $request->tanggal_lahir_calon_mempelai_wanita,
            'nomor_ktp_calon_mempelai_wanita' => $request->nomor_ktp_calon_mempelai_wanita,
            'nomor_surat_baptis_calon_mempelai_wanita' => $request->nomor_surat_baptis_calon_mempelai_wanita,
            'asal_gereja_baptis_calon_mempelai_wanita' => $request->asal_gereja_baptis_calon_mempelai_wanita,
            'gereja_sekarang_calon_mempelai_wanita' => $request->gereja_sekarang_calon_mempelai_wanita,
            'pekerjaan_calon_mempelai_wanita' => $request->pekerjaan_calon_mempelai_wanita,
            'alamat_pekerjaan_calon_mempelai_wanita' => $request->alamat_pekerjaan_calon_mempelai_wanita,
            'telp_pekerjaan_calon_mempelai_wanita' => $request->telp_pekerjaan_calon_mempelai_wanita,
            'nama_ayah_calon_mempelai_wanita' => $request->nama_ayah_calon_mempelai_wanita,
            'nama_ibu_calon_mempelai_wanita' => $request->nama_ibu_calon_mempelai_wanita,
            'nomor_telp_orangtua_calon_mempelai_wanita' => $request->nomor_telp_orangtua_calon_mempelai_wanita,
            'alamat_orangtua_calon_mempelai_wanita' => $request->alamat_orangtua_calon_mempelai_wanita,
            'persetujuan_orangtua_calon_mempelai_wanita' => $persetujuan_orangtua_calon_mempelai_wanita,
            'riwayat_calon_mempelai_wanita' => $riwayat_calon_mempelai_wanita,
            'status_calon_mempelai_wanita' => $status_calon_mempelai_wanita,
            'cek_surat_sipil' => $cek_surat_sipil,
            'file_surat_catatan_sipil' => $filePath
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(form_pernikahan $form_pernikahan)
    {
        $form_pernikahan->delete();
        return redirect()->route('manajemenJemaat.index')->with('success', 'Jemaat berhasil dihapus.');
    }
}
