<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Pemasok;

use Illuminate\Http\Request;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::all();
        return view('barangs.index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pemasoks = Pemasok::all();
        return view('barangs.create', compact('pemasoks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'stok' => 'required|string',
            'harga' => 'required|string',
            'pemasok_id' => 'required|exists:pemasok,id'
        ]);
    
        Barang::create($request->all());
    
        return redirect()->route('barangs.index')->with('success', 'Barang created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        return view('barangs.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        $pemasoks = Pemasok::all();
        return view('barangs.edit', compact('barang', 'pemasoks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama' => 'required|string',
            'stok' => 'required|string',
            'harga' => 'required|string',
            'pemasok_id' => 'required|exists:pemasok,id'
        ]);

        $barang->update($request->all());

        return redirect()->route('barangs.index')->with('success', 'Barang berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        $barang->delete();

        return redirect()->route('barangs.index')->with('success', 'Barang berhasil dihapus.');
    }
}
