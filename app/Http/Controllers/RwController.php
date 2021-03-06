<?php

namespace App\Http\Controllers;

use App\Models\rw;
use App\Models\desa;
use Illuminate\Http\Request;

class RwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rw = Rw::with('desa')->get();
        return view('admin.rw.index', compact('rw'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $desa = Desa::all();
        return view('admin.rw.create',compact('desa'));
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
            
            'nama_rw' => 'required|unique:rws'
        ],[
            
            'nama_rw.required' => 'nama rw tidak boleh kosong',
            'nama_rw.max' => 'nama rw tidak boleh kurang dari 2 huruf',
            'nama_rw.unique' => 'nama rw sudah terdaftar',
        ]
        );
        $rw = new Rw();
        $rw->id_desa = $request->id_desa;
        $rw->nama_rw = $request->nama_rw;
        $rw->save();
        return redirect()->route('rw.index')
            ->with(['success'=>'Data <b>', $rw->nama_rw, 
            '</b> Berhasil di input']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rw = Rw::findOrFail($id);
        return view('admin.rw.show',compact('rw'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $desa = Desa::all();
        $rw = Rw::findOrFail($id);
        return view('admin.rw.edit', compact('rw', 'desa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            
            'nama_rw' => 'required|unique:rws'
        ],[
            
            'nama_rw.required' => 'nama rw tidak boleh kosong',
            'nama_rw.max' => 'nama rw tidak boleh kurang dari 2 huruf',
            'nama_rw.unique' => 'nama rw sudah terdaftar',
        ]
        );
        $rw = Rw::findOrFail($id);
        $rw->id_desa = $request->id_desa;
        $rw->nama_rw = $request->nama_rw;
        $rw ->save();
        return redirect()->route('rw.index')
        ->with(['success'=>'Data <b>',$rw ->nama_rw,'</b> Berhasil Di Edit']); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rw = Rw::findOrFail($id);
        $rw->delete();
        return redirect()->route('rw.index')
        ->with(['success'=>'Data <b>',$rw->nama_rw,
        '</b> Data Berhasil Di Hapus']);
    }
}
