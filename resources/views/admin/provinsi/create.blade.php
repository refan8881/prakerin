@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                Data Provinsi
                
                </div>
                <div class="card-body">
                    <form action="{{route('provinsi.store')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="">kode provinsi</label>
                        <input type="text" name="kode_provinsi" class="form-control" require>
                    
                    </div>
                    <div class="form-group">
                        <label for="">nama provinsi</label>
                        <input type="text" name="nama_provinsi" class="form-control" require>
                    
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