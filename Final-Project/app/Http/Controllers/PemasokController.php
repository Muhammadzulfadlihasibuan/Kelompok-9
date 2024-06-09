<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemasok;

class PemasokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemasoks = Pemasok::all();
        return view('pemasok.index', compact('pemasoks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemasok.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required'
        ]);

        $pemasoks= new Pemasok;
        $pemasoks->nama = $request->nama;
        $pemasoks->save();

        return redirect('/pemasok')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pemasok = Pemasok::find($id);

        if (!$pemasok) {
            return redirect('/pemasok')->with('error', 'Data tidak ditemukan.');
        }

        return view('pemasok.show', compact('pemasok'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pemasok = Pemasok::findOrFail($id);
        return view('pemasok.edit', compact('pemasok'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required'
        ]);

        $pemasok = Pemasok::findOrFail($id);
        $pemasok->nama = $request->input('nama');
        $pemasok->save();

        return redirect()->route('pemasok.index')->with('success', 'Data berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pemasok = Pemasok::find($id);

        if (!$pemasok) {
            return redirect('/pemasok')->with('error', 'Data tidak ditemukan.');
        }

        $pemasok->delete();

        return redirect('/pemasok')->with('success', 'Data berhasil dihapus.');
    }
}