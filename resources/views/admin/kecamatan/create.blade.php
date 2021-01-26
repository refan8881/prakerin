@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                Tambah Data Kecamatan
                
                </div>
                <div class="card-body">
                    <form action="{{route('kecamatan.store')}}" method="post">
                    @csrf
                    <div class="form-group">

                        <label for="">pilih kota</label>
                        <select name="id_kota" class="form-control">
                            @foreach($kota as $data)
                            <option value="{{$data->id}}">{{$data->nama_kota}}</option>
                            @endforeach
                        </select>
                    </div>

                    
                    <div class="form-group">
                        <label for="">nama kecamatan</label>
                        <input type="text" name="nama_kecamatan" class="form-control" require>
                    
                    </div>
                    <div class="form-group">
                                <button type="submit" class="btn btn-primary btn block">Simpan</button>
                                <a href=" {{ route('kecamatan.index') }} " class="btn btn-danger">Back</a>
                            </div>
                    </form>
                
                </div>
            
            </div>
        
        </div>
    
    </div>

</div>
@endsection