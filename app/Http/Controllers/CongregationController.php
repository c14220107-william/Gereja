<?php

namespace App\Http\Controllers;

use App\Models\Congregation;
use Illuminate\Http\Request;

class CongregationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $congregations = Congregation::all();
        return view('admin.congregation.index', compact('congregations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.congregation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:congregations',
            'phone' => 'required|string',
            'address' => 'required|string',
        ]);

        Congregation::create($request->all());
        return redirect()->route('congregation.index')->with('success', 'Jemaat berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Congregation $congregation)
    {
        // return view('congregations.show', compact('congregation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Congregation $congregation)
    {
        return view('admin.congregation.edit', compact('congregation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Congregation $congregation)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:congregations,email,' . $congregation->id,
            'phone' => 'required|string',
            'address' => 'required|string',
        ]);

        $congregation->update($request->all());
        return redirect()->route('congregation.index')->with('success', 'Jemaat berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Congregation $congregation)
    {
        $congregation->delete();
        return redirect()->route('congregation.index')->with('success', 'Jemaat berhasil dihapus.');
    }
}
