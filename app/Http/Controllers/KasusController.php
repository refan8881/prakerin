<?php

namespace App\Http\Controllers;

use App\Models\kasus;
use App\Models\desa;
use App\Models\provinsi;
use App\Models\kecamatan;
use App\Models\rw;
use App\Models\kota;
use Illuminate\Http\Request;

class KasusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rw = Rw::with('desa')->get();

        return view('admin.rw.index', compact('kasus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function show(kasus $kasus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function edit(kasus $kasus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kasus $kasus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function destroy(kasus $kasus)
    {
        //
    }
}
