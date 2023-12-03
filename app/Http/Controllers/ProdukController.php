<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;
use App\Models\Kategori;
use App\Models\Status;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('produk.index', [
            'produk' => Produk::get(),
            'kategori' => Kategori::get(),
            'status' => Status::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('produk.create', [
            'produk' => Produk::all(),
            'kategori' => Kategori::all(),
            'status' => Status::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProdukRequest $request)
    {
        //
        $validatedData = $request->validate([
            'nama_produk' => 'required|max:255',
            'kategori_id' => 'required',
            'status_id' => 'required',
            'harga' => 'required'
        ]);




        Produk::create($validatedData);

        return redirect('/produk')->with('success', 'Produk berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
        return view('produk.show', [
            'produk' => $produk
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        //
        return view('produk.edit', [
            'produk' => $produk,
            'kategori' => Kategori::all(),
            'status' => Status::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProdukRequest $request, Produk $produk)
    {
        //

        $rules = [
            'nama_produk' => 'required|max:255',
            'kategori_id' => 'required',
            'status_id' => 'required',
            'harga' => 'required'
        ];

        // if ($request->id_produk != $produk->id_produk) {
        //     $rules['id_produk'] = 'required|unique:produk';
        // }
        $validatedData = $request->validate($rules);



        Produk::where('id_produk', $produk->id_produk)->update($validatedData);

        return redirect('/produk')->with('success', 'Produk berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        //
        Produk::destroy($produk->id_produk);
        return redirect('/produk')->with('success', 'Produk berhasil dihapus!');
    }
}
