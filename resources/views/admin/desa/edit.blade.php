@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                Edit Data Desa
                
                </div>
                <div class="card-body">
                    <form action="{{route('desa.update',$desa->id)}}" method="post">
                    @method('put')
                    @csrf
                    <div class="form-group">
                                <label for="">Pilih Kecamatan</label>
                                <select name="id_kecamatan" class="form-control">
                                    @foreach($kecamatan as $data)
                                        <option value="{{$data->id}}" {{$data->id == $desa->id_kecamatan ? 'selected' : ''}}>
                                            {{$data->nama_kecamatan}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                    <div class="form-group">
                        <label for="">nama desa</label>
                        <input type="text" name="nama_desa"  value="{{$desa->nama_desa}}" class="form-control" require>
                        @if($errors->has('nama_desa'))
                          <span class="text-danger">{{ $errors->first('nama_desa') }}</span>
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