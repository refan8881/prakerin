@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                 Data Rw
                
                </div>
                <div class="card-body">
                    <form action="{{route('rw.update',$rw->id)}}" method="post">

                    <div class="form-group">
                        <label for="">Nama desa</label>
                        <input type="text" name="id_desa"  value="{{$rw->desa->   nama_desa}}" class="form-control" readonly>
                    

                    <div class="form-group">
                        <label for="">Nama rw</label>
                        <input type="text" name="nama_rw"  value="{{$rw->nama_rw}}" class="form-control" readonly>
                    
                    </div>
                    
                    </form>
                
                </div>
            
            </div>
        
        </div>
    
    </div>

</div>
@endsection