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
    public function create2()
    {
       return view('admin.manajemenJemaat.create2'); 
    }
    public function create3()
    {
       return view('admin.manajemenJemaat.create3'); 
    }

    // public function edit(form_penyerahan_anak $form_penyerahan_anak)
    // {
    //     $this->form_penyerahan_anak_Controller->edit($form_penyerahan_anak);;
    //     return view('admin.manajemenJemaat.edit1');
    // }
    public function edit1($id)
    {
        $formPenyerahanAnak = form_penyerahan_anak::findOrFail($id);
        return view('admin.manajemenJemaat.edit1', compact('formPenyerahanAnak'));
    }
    public function edit2($id){
        $formPernikahan = form_pernikahan::findOrFail($id);
        return view('admin.manajemenJemaat.edit2', compact('formPernikahan'));
        
    }
    public function edit3($id){
        $formBaptisan = form_baptisan::findOrFail($id);
        return view('admin.manajemenJemaat.edit3', compact('formBaptisan'));
        
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

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }

    public function storefromCreate(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'form_type' => 'required|string',
            // Tambahkan validasi lain sesuai kebutuhan
        ]);

        // Proses penyimpanan berdasarkan jenis form
        switch ($validatedData['form_type']) {
            case 'penyerahan_anak':
                return $this->form_penyerahan_anak_Controller->storefromCreate($request);
            case 'pernikahan':
                return $this->form_penikahan_Controller->storefromCreate($request);
            case 'baptisan':
                return $this->FormBaptisanController->storefromCreate($request);
        }

        return redirect()->route('manajemenJemaat.index')->with('success', 'Data created successfully');
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
    // public function update(Request $request, string $id)
    // {
    //     // Validasi data
    //     $validatedData = $request->validate([
    //         'form_type' => 'required|string',
    //         // Tambahkan validasi lain sesuai kebutuhan
    //     ]);

    //     $form_penyerahan_anak = form_penyerahan_anak::all()->id;

    //     // Proses penyimpanan berdasarkan jenis form
    //     switch ($validatedData['form_type']) {
    //         case 'penyerahan_anak':
    //             return $this->form_penyerahan_anak_Controller->update($request,$form_penyerahan_anak);
    //         // case 'pernikahan':
    //         //     return $this->form_penikahan_Controller->update($request,$id);
    //         // case 'baptisan':
    //         //     return $this->FormBaptisanController->update($request,$id);
    //     }

    //     return redirect()->route('admin.manajemenJemaat.index')->with('success', 'Data berhasil disimpan.');
    // }

    public function update1(Request $request, $id)
    {
        $formPenyerahanAnak = form_penyerahan_anak::findOrFail($id);
        // Validate and update the form data here
        $formPenyerahanAnak->update($request->all());
        return redirect()->route('manajemenJemaat.index')->with('success', 'Data updated successfully');
    }

    public function update2(Request $request, $id)
    {
        $formPernikahan = form_baptisan::findOrFail($id);
        // Validate and update the form data here
        $formPernikahan->update($request->all());
        return redirect()->route('manajemenJemaat.index')->with('success', 'Data updated successfully');
    }

    public function update3(Request $request, $id)
    {
        $formBaptisan = form_baptisan::findOrFail($id);
        // Validate and update the form data here
        $formBaptisan->update($request->all());
        return redirect()->route('manajemenJemaat.index')->with('success', 'Data updated successfully');
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
