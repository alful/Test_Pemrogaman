<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Http\Requests\StoreKategoriRequest;
use App\Http\Requests\UpdateKategoriRequest;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('kategori.index', [
            'kategori' => Kategori::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKategoriRequest $request)
    {
        //
        $validatedData = $request->validate([
            'nama_kategori' => 'required|max:255|unique:kategori',
        ]);

        Kategori::create($validatedData);

        return redirect('/kategori')->with('success', 'Kategori berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
        return view('kategori.show', [
            'kategori' => $kategori
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        //
        return view('kategori.edit', [
            'kategori' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKategoriRequest $request, Kategori $kategori)
    {
        //
        $rules = [];
        if ($request->nama_kategori != $kategori->nama_kategori) {
            $rules['nama_kategori'] = 'required|unique:kategori';
        }
        $validatedData = $request->validate($rules);

        Kategori::where('id_kategori', $kategori->id_kategori)->update($validatedData);

        return redirect('/kategori')->with('success', 'Kategori berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        //
        Kategori::destroy($kategori->id_kategori);

        return redirect('/kategori')->with('success', 'Kategori berhasil dihapus!');
    }
}
