@extends('layouts.master')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
        Data kecamatan
        <a href="{{route('kecamatan.create')}}" class="btn btn-primary float-right"> 
            tambah
         </a>
        </div>
            <div class="card-body">
               
                    <div class="table-responsive">
                        <table class="table">

                        <tr>
                            <th>No</th>
                            <th>Nama Kota</th>
                            <th>Nama Kecamatan</th>
                            
                        </tr>
                        @php $no=1; @endphp
                        @foreach($kecamatan as $data)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->kota->nama_kota}}</td>
                            <td>{{$data->nama_kecamatan}}</td>
                            <td>
                                <form action="{{route('kecamatan.destroy',$data->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{route('kecamatan.edit',$data->id)}}" class="btn btn-info">edit</a>
                                <a href="{{route('kecamatan.show',$data->id)}}" class="btn btn-warning">show</a>
                                <button type="submit" class="btn btn-danger">delete</button>
                                </form>
                            </td>
                        </tr>
                        
                        @endforeach
                        
                        </table>
                    
                    
                    </div>
                
               
            
            </div>
    
    </div>

</div>

</div>

</div>
@endsection