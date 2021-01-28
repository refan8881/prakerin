@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                Edit Data Provinsi
                
                </div>
                <div class="card-body">

                <h1>Create Post</h1>


                    <form action="{{route('provinsi.update',$provinsi->id)}}" method="post">
                    @method('put')
                    @csrf

                    <div class="form-group">
                        <label for="">kode provinsi</label>
                        <input type="text" name="kode_provinsi"  value="{{$provinsi->kode_provinsi}}" class="form-control" require>
                        @if($errors->has('kode_provinsi'))
      <span class="text-danger">{{ $errors->first('kode_provinsi') }}</span>
@endif
                    </div>
                    <div class="form-group">
                        <label for="">nama provinsi</label>
                        <input type="text" name="nama_provinsi" value="{{$provinsi->nama_provinsi}}" class="form-control" require>
                    
                    </div>
                    <div class="form-group">

                        <button type="submit" class="btn btn-primary btn-block">simpan</button>
                    
                    </div>
                    </form>
                
                </div>
            
            </div>
        
        </div>
    
    </div>

</div>
@endsection