@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                Edit Data Rw
                
                </div>
                <div class="card-body">
                    <form action="{{route('rw.update',$rw->id)}}" method="post">
                    @method('put')
                    @csrf
                    <div class="form-group">
                                <label for="">Pilih Desa</label>
                                <select name="id_desa" class="form-control">
                                    @foreach($desa as $data)
                                        <option value="{{$data->id}}" {{$data->id == $rw->id_desa ? 'selected' : ''}}>
                                            {{$data->nama_desa}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                    <div class="form-group">
                        <label for="">nama rw</label>
                        <input type="text" name="nama_rw"  value="{{$rw->nama_rw}}" class="form-control" require>
                        
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