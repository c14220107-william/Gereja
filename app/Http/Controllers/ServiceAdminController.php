<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceAdminController extends Controller
{
    public function index()
    {
        $services = Service::all(); // Ambil semua data pelayanan
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create'); // Form untuk menambah pelayanan baru
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        // Simpan pelayanan baru
        Service::create($request->all());

        return redirect()->route('services.index')->with('success', 'Pelayanan berhasil ditambahkan!');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service')); // Form untuk mengedit pelayanan
    }

    public function update(Request $request, Service $service)
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        // Update pelayanan
        $service->update($request->all());

        return redirect()->route('services.index')->with('success', 'Pelayanan berhasil diupdate!');
    }

    public function destroy(Service $service)
    {
        // Hapus pelayanan
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Pelayanan berhasil dihapus!');
    }
}
