@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                Tambah Data kasus
                
                </div>
                <div class="card-body">
                    <form action="{{route('kasus.store')}}" method="post">
                    @csrf
                    <div class="form-group">

                        <label for="">Pilih Rw</label>
                        <select name="id_rw" class="form-control">
                            @foreach($rw as $data)
                            <option value="{{$data->id}}">{{$data->nama_rw}}</option>
                            @endforeach
                        </select>
                    </div>

                    
                    <div class="form-group">
                        <label for="">No kasus</label>
                        <input type="text" name="nama_kasus" class="form-control" require>
                    
                    </div>
                    <div class="form-group">
                                <button type="submit" class="btn btn-primary btn block">Simpan</button>
                                <a href=" {{ route('kasus.index') }} " class="btn btn-danger">Back</a>
                            </div>
                    </form>
                
                </div>
            
            </div>
        
        </div>
    
    </div>

</div>
@endsection