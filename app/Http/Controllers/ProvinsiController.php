<?php

namespace App\Http\Controllers;

use App\Models\provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinsi = Provinsi::all();
        return view('admin.provinsi.index',compact('provinsi'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.provinsi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_provinsi' => 'required|unique:provinsis',
            'nama_provinsi' => 'required'
        ],[
            'kode_provinsi.required' => 'kode provinsi tidak boleh kosong',
            'kode_provinsi.max' => 'kode maksimal 3 karakter',
            'kode_provinsi.unique' => 'kode provinsi sudah terdaftar',
            'nama_provinsi.required' => 'nama provinsi tidak boleh kosong',
            'nama_provinsi.max' => 'nama provinsi tidak boleh kurang dari 2 huruf',
            'kode_provinsi.unique' => 'nama provinsi sudah terdaftar',
        ]
        );

        $provinsi = new Provinsi();
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();
        return redirect()->route('provinsi.index')->with(['succses'=>'Data <b>',$provinsi->nama_provinsi,
        '</b> berhasil di input']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        return view('admin.provinsi.show', compact('provinsi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        
        $provinsi = Provinsi::findOrFail($id);
        return view('admin.provinsi.edit', compact('provinsi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_provinsi' => 'required',
            'nama_provinsi' => 'required',
        ]);
        $provinsi = Provinsi::findOrFail($id);
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();
        return redirect()->route('provinsi.index')->with(['succses'=>'Data <b>',$provinsi->nama_provinsi,
        '</b> berhasil di edit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        $provinsi->delete();
        return redirect()->route('provinsi.index')->with(['succses'=>'Data <b>',$provinsi->nama_provinsi,
        '</b> berhasil di hapus']);
    }
}
