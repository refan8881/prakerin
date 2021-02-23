@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Edit Data Kasus
                    </div>
                    <div class="card-body">
                        <form action="{{route('kasus.update', $kasus->id)}}" method="post">
                            @method('put')
                            @csrf
                            <div class="col">
                                @livewire('dropdowns',['selectedRw'=>$kasus->id_rw,'selecteddesa'=>$kasus->rw->id_desa,
                                            'selectedKecamatan'=>$kasus->rw->desa->id_kecamatan,
                                            'selectedKota'=>$kasus->rw->desa->kecamatan->id_kota,
                                            'selectedProvinsi'=>$kasus->rw->desa->kecamatan->kota->id_provinsi])
                            </div>
                            
                            <div class="form-group">
                                <label for="">Jumlah Positif</label>
                                <input type="text" name="positif" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Meninggal</label>
                                <input type="text" name="meninggal" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Sembuh</label>
                                <input type="text" name="sembuh" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn block">Simpan</button>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection