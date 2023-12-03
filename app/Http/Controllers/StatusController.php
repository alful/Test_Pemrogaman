<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Http\Requests\StoreStatusRequest;
use App\Http\Requests\UpdateStatusRequest;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('status.index', [
            'status' => Status::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('status.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStatusRequest $request)
    {
        //
        $validatedData = $request->validate([
            'nama_status' => 'required|max:255|unique:status',
        ]);

        Status::create($validatedData);

        return redirect('/status')->with('success', 'Status berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Status $status)
    {
        //
        return view('status.show', [
            'status' => $status
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Status $status)
    {
        //
        return view('status.edit', [
            'status' => $status
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStatusRequest $request, Status $status)
    {
        //
        $rules = [];
        if ($request->nama_status != $status->nama_status) {
            $rules['nama_status'] = 'required|unique:status';
        }
        $validatedData = $request->validate($rules);

        Status::where('id_status', $status->id_status)->update($validatedData);

        return redirect('/status')->with('success', 'Status berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Status $status)
    {
        //
        Status::destroy($status->id_status);

        return redirect('/status')->with('success', 'Status berhasil dihapus!');
    }
}
