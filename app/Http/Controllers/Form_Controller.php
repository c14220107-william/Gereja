<?php

namespace App\Http\Controllers;

use App\Models\form_baptisan;
use App\Models\form_penyerahan_anak;
use App\Models\form_pernikahan;
use Illuminate\Http\Request;

use function Laravel\Prompts\form;

class Form_Controller extends Controller
{

    protected $form_penyerahan_anak_Controller;
    protected $form_penikahan_Controller;
    protected $FormBaptisanController;

    public function __construct()
    {
        $this->form_penyerahan_anak_Controller = new form_penyerahan_anak_Controller();
        $this->form_penikahan_Controller = new form_pernikahan_Controller();
        $this->FormBaptisanController = new FormBaptisanController();
       
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $form_penyerahan_anaks = form_penyerahan_anak::all();
        $form_pernikahans = form_pernikahan::all();
        $form_baptisans = form_baptisan::all();
        return view('admin.manajemenJemaat.index',compact('form_penyerahan_anaks', 'form_pernikahans','form_baptisans'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create1()
    {
       return view('admin.manajemenJemaat.create1'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'form_type' => 'required|string',
            // Tambahkan validasi lain sesuai kebutuhan
        ]);

        // Proses penyimpanan berdasarkan jenis form
        switch ($validatedData['form_type']) {
            case 'penyerahan_anak':
                return $this->form_penyerahan_anak_Controller->store($request);
            case 'pernikahan':
                return $this->form_penikahan_Controller->store($request);
            case 'baptisan':
                return $this->FormBaptisanController->store($request);
        }

        return redirect()->route('admin.manajemenJemaat.index')->with('success', 'Data berhasil disimpan.');
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
    public function destroy(string $id)
    {
        $form_penyerahan_anak = form_penyerahan_anak::find($id); // atau sesuai dengan model Anda
        if ($form_penyerahan_anak) {
            $form_penyerahan_anak->delete();
            return redirect()->route('manajemenJemaat.index')->with('success', 'Data berhasil dihapus');
        }
        
        $formPernikahan = form_pernikahan::find($id); // atau sesuai dengan model Anda
        if ($formPernikahan) {
            $formPernikahan->delete();
            return redirect()->route('manajemenJemaat.index')->with('success', 'Data berhasil dihapus');
        }

        $form_baptisan = form_baptisan::find($id);
        if ($form_baptisan) {
            $form_baptisan->delete();
            return redirect()->route('manajemenJemaat.index')->with('success', 'Data berhasil dihapus');
        } 
        
        return redirect()->route('manajemenJemaat.index')->with('error', 'Data tidak ditemukan');
        }
}
