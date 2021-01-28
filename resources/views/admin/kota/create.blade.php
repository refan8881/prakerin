@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                Tambah Data Kota
                
                </div>
                <div class="card-body">
                    <form action="{{route('kota.store')}}" method="post">
                    @csrf
                    <div class="form-group">

                        <label for="">pilih provinsi</label>
                        <select name="id_provinsi" class="form-control">
                            @foreach($provinsi as $data)
                            <option value="{{$data->id}}">{{$data->nama_provinsi}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">kode kota</label>
                        <input type="text" name="kode_kota" class="form-control" require>
                        @if($errors->has('kode_kota'))
                          <span class="text-danger">{{ $errors->first('kode_kota') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">nama kota</label>
                        <input type="text" name="nama_kota" class="form-control" require>
                    
                    </div>
                    <div class="form-group">
                                <button type="submit" class="btn btn-primary btn block">Simpan</button>
                                <a href=" {{ route('kota.index') }} " class="btn btn-danger">Back</a>
                            </div>
                    </form>
                
                </div>
            
            </div>
        
        </div>
    
    </div>

</div>
@endsection