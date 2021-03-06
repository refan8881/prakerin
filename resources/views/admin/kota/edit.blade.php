@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                Edit Data kota
                
                </div>
                <div class="card-body">
                    <form action="{{route('kota.update',$kota->id)}}" method="post">
                    @method('put')
                    @csrf
                    <div class="form-group">
                                <label for="">Pilih Provinsi</label>
                                <select name="id_provinsi" class="form-control">
                                    @foreach($provinsi as $data)
                                        <option value="{{$data->id}}" {{$data->id == $kota->id_provinsi ? 'selected' : ''}}>
                                            {{$data->nama_provinsi}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                    <div class="form-group">
                        <label for="">kode kota</label>
                        <input type="text" name="kode_kota"  value="{{$kota->kode_kota}}" class="form-control" require>
                        @if($errors->has('kode_kota'))
                          <span class="text-danger">{{ $errors->first('kode_kota') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">nama kota</label>
                        <input type="text" name="nama_kota" value="{{$kota->nama_kota}}" class="form-control" require>
                        @if($errors->has('nama_kota'))
                          <span class="text-danger">{{ $errors->first('nama_kota') }}</span>
                        @endif
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