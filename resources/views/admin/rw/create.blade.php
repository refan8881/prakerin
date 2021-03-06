@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                Tambah Data Rw
                
                </div>
                <div class="card-body">
                    <form action="{{route('rw.store')}}" method="post">
                    @csrf
                    <div class="form-group">

                        <label for="">Pilih Desa</label>
                        <select name="id_desa" class="form-control">
                            @foreach($desa as $data)
                            <option value="{{$data->id}}">{{$data->nama_desa}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('nama_desa'))
                          <span class="text-danger">{{ $errors->first('nama_desa') }}</span>
                        @endif
                    </div>

                    
                    <div class="form-group">
                        <label for="">No Rw</label>
                        <input type="text" name="nama_rw" class="form-control" require>
                    
                    </div>
                    <div class="form-group">
                                <button type="submit" class="btn btn-primary btn block">Simpan</button>
                                <a href=" {{ route('rw.index') }} " class="btn btn-danger">Back</a>
                            </div>
                    </form>
                
                </div>
            
            </div>
        
        </div>
    
    </div>

</div>
@endsection