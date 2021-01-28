<?php

namespace App\Http\Controllers;

use App\Models\desa;
use App\Models\kecamatan;
use Illuminate\Http\Request;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $desa = Desa::with('kecamatan')->get();
        return view('admin.desa.index', compact('desa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatan = Kecamatan::all();
        return view('admin.desa.create',compact('kecamatan'));
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
            
            'nama_desa' => 'required|unique:desas'
        ],[
            
            'nama_desa.required' => 'nama desa tidak boleh kosong',
            'nama_desa.max' => 'nama desa tidak boleh kurang dari 2 huruf',
            'nama_desa.unique' => 'nama desa sudah terdaftar',
        ]
        );
        $desa = new Desa();
        $desa->id_kecamatan = $request->id_kecamatan;
        $desa->nama_desa = $request->nama_desa;
        $desa->save();
        return redirect()->route('desa.index')
            ->with(['success'=>'Data <b>', $desa->nama_desa, 
            '</b> Berhasil di input']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $desa = Desa::findOrFail($id);
        return view('admin.desa.show',compact('desa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kecamatan = Kecamatan::all();
        $desa = Desa::findOrFail($id);
        return view('admin.desa.edit', compact('desa', 'kecamatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            
            'nama_desa' => 'required|unique:desas'
        ],[
            
            'nama_desa.required' => 'nama desa tidak boleh kosong',
            'nama_desa.max' => 'nama desa tidak boleh kurang dari 2 huruf',
            'nama_desa.unique' => 'nama desa sudah terdaftar',
        ]
        );
        $desa = Desa::findOrFail($id);
        $desa->id_kecamatan = $request->id_kecamatan;
        $desa->nama_desa = $request->nama_desa;
        $desa ->save();
        return redirect()->route('desa.index')
        ->with(['success'=>'Data <b>',$desa ->nama_desa,'</b> Berhasil Di Edit']); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $desa = Desa::findOrFail($id);
        $desa->delete();
        return redirect()->route('desa.index')
        ->with(['success'=>'Data <b>',$desa->nama_desa,
        '</b> Data Berhasil Di Hapus']);
    }
}
