<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Http\Request;


class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kota = Kota::with('provinsi')->get();
        return view('admin.kota.index', compact('kota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinsi = Provinsi::all();
        return view('admin.kota.create',compact('provinsi'));
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
            'kode_kota' => 'required|max:7|unique:kotas',
            'nama_kota' => 'required|unique:kotas'
        ],[
            'kode_kota.required' => 'kode kota tidak boleh kosong',
            'kode_kota.max' => 'kode maksimal 3 karakter',
            'kode_kota.unique' => 'kode kota sudah terdaftar',
            'nama_kota.required' => 'nama kota tidak boleh kosong',
            'nama_kota.max' => 'nama kota tidak boleh kurang dari 2 huruf',
            'nama_kota.unique' => 'nama kota sudah terdaftar',
        ]
        );
        $kota = new Kota();
        $kota->id_provinsi = $request->id_provinsi;
        $kota->kode_kota = $request->kode_kota;
        $kota->nama_kota = $request->nama_kota;
        $kota->save();
        return redirect()->route('kota.index')
            ->with(['success'=>'Data <b>', $kota->nama_kota, 
            '</b> Berhasil di input']);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kota = Kota::findOrFail($id);
        return view('admin.kota.show',compact('kota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provinsi = Provinsi::all();
        $kota = Kota::findOrFail($id);
        return view('admin.kota.edit', compact('kota', 'provinsi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id)
    {
        $request->validate([
            'kode_kota' => 'required',
            'nama_kota' => 'required',
        ]);
        $kota = Kota::findOrFail($id);
        $kota->id_provinsi = $request->id_provinsi;
        $kota->kode_kota = $request->kode_kota;
        $kota->nama_kota = $request->nama_kota;
        $kota->save();
        return redirect()->route('kota.index')
        ->with(['success'=>'Data <b>',$kota ->nama_kota,'</b> Berhasil Di Edit']);  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kota = Kota::findOrFail($id);
        $kota->delete();
        return redirect()->route('kota.index')
        ->with(['success'=>'Data <b>',$kota->nama_kota,
        '</b> Data Berhasil Di Hapus']);
    }
}
