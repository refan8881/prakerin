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
                    <form action="{{route('kecamatan.update',$kecamatan->id)}}" method="post">

                    <div class="form-group">
                        <label for="">Nama kota</label>
                        <input type="text" name="id_kota"  value="{{$kecamatan->kota->   nama_kota}}" class="form-control" readonly>
                    

                    <div class="form-group">
                        <label for="">Nama Kecamatan</label>
                        <input type="text" name="nama_kecamatan"  value="{{$kecamatan->nama_kecamatan}}" class="form-control" readonly>
                    
                    </div>
                    
                    </form>
                
                </div>
            
            </div>
        
        </div>
    
    </div>

</div>
@endsection