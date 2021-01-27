@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                 Data desa
                
                </div>
                <div class="card-body">
                    <form action="{{route('desa.update',$desa->id)}}" method="post">

                    <div class="form-group">
                        <label for="">Nama kecamatan</label>
                        <input type="text" name="id_kecamatan"  value="{{$desa->kecamatan->   nama_kecamatan}}" class="form-control" readonly>
                    

                    <div class="form-group">
                        <label for="">Nama desa</label>
                        <input type="text" name="nama_desa"  value="{{$desa->nama_desa}}" class="form-control" readonly>
                    
                    </div>
                    
                    </form>
                
                </div>
            
            </div>
        
        </div>
    
    </div>

</div>
@endsection