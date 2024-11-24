<?php

namespace App\Http\Controllers;

use App\Models\Persembahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersembahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{

    $persembahanss = Persembahan::orderBy('tanggal', 'desc')->get();
    // Ambil data persembahan berdasarkan kategori dan tanggal, urutkan berdasarkan tanggal


    $persembahans = Persembahan::orderBy('tanggal', 'asc')->get();

    // Kelompokkan data berdasarkan tanggal dan kategori
    $totalsByDateAndCategory = Persembahan::select('tanggal', 'kategori', DB::raw('SUM(jumlah) as total'))
        ->groupBy('tanggal', 'kategori')
        ->orderBy('tanggal', 'asc')
        ->get();

    // Mengatur data untuk chart
    $categories = ['Umum', 'Youth', 'Sekolah_Minggu'];
    $dates = $totalsByDateAndCategory->pluck('tanggal')->unique()->toArray(); // Ambil tanggal unik
    $chartData = [
        'labels' => $dates, // Tanggal untuk sumbu X
        'data' => [],
    ];

    // Data untuk setiap kategori (Umum, Youth, Sekolah Minggu)
    foreach ($categories as $category) {
        $categoryData = $totalsByDateAndCategory->where('kategori', $category);
        $categoryTotals = [];
        
        // Menyusun data berdasarkan tanggal
        foreach ($dates as $date) {
            $total = $categoryData->where('tanggal', $date)->first();
            $categoryTotals[] = $total ? $total->total : 0; // Jika tidak ada data, set 0
        }

        // Masukkan data kategori ke dalam chartData
        $chartData['data'][] = [
            'label' => $category,
            'data' => $categoryTotals,
            'borderColor' => $this->getCategoryColor($category), // Fungsi untuk mendapatkan warna kategori
            'fill' => false,
            'borderWidth' => 2,
        ];

        // Hitung total keseluruhan untuk tiap kategori
    $totalByCategory = Persembahan::select('kategori', DB::raw('SUM(jumlah) as total'))
    ->groupBy('kategori')
    ->get();

    $totalPerCategory = [];
    foreach ($totalByCategory as $categoryTotal) {
        $totalPerCategory[$categoryTotal->kategori] = $categoryTotal->total;
    }

    $totalAllPersembahan = Persembahan::sum('jumlah');


    }

    return view('admin.manajemenPersembahan.index', compact('persembahanss','persembahans', 'chartData', 'totalPerCategory', 'totalAllPersembahan'));
}

// Fungsi untuk menentukan warna berdasarkan kategori
private function getCategoryColor($category)
{
    $colors = [
        'Umum' => 'rgba(54, 162, 235, 1)',
        'Youth' => 'rgba(255, 99, 132, 1)',
        'Sekolah_Minggu' => 'rgba(75, 192, 192, 1)',
    ];

    return $colors[$category] ?? 'rgba(0, 0, 0, 1)'; // Default ke hitam jika tidak ditemukan
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
        {
            $request->validate([
                'tanggal' => 'required|date',
                'kategori' => 'required|string',
                'jumlah' => 'required|integer',
                'detail' => 'nullable|string',
            ]);
    
            Persembahan::create($request->all());
    
            return redirect()->back()->with('succes' , 'Data Berhasil Dimasukan');
        }
    
    public function destroy($id){
            Persembahan::findOrFail($id)->delete();
            return redirect()->route('admin.manajemen_persembahan.index')->with('success', 'Data berhasil dihapus');
        }
        
    

    /**
     * Display the specified resource.
     */
    public function show(Persembahan $persembahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persembahan $persembahan, $id)
    {
        $persembahan = Persembahan::findOrFail($id);
        
        return view('admin.manajemenPersembahan.edit', compact('persembahan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $persembahan = Persembahan::findOrFail($id);
        // Validate and update the form data here
        $persembahan->update($request->all());
        return redirect()->route('admin.manajemen_persembahan.index')->with('success', 'Data updated successfully');
    }
    
}
