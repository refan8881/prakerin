@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                 Data kota
                
                </div>
                <div class="card-body">
                    <form action="{{route('kota.update',$kota->id)}}" method="post">

                    <div class="form-group">
                        <label for="">Nama Provinsi</label>
                        <input type="text" name="id_provinsi"  value="{{$kota->provinsi->   nama_provinsi}}" class="form-control" readonly>
                    

                    <div class="form-group">
                        <label for="">kode kota</label>
                        <input type="text" name="kode_kota"  value="{{$kota->kode_kota}}" class="form-control" readonly>
                    
                    </div>
                    <div class="form-group">
                        <label for="">nama kota</label>
                        <input type="text" name="nama_kota" value="{{$kota->nama_kota}}" class="form-control" readonly>
                    
                    </div>
                    
                    </form>
                
                </div>
            
            </div>
        
        </div>
    
    </div>

</div>
@endsection