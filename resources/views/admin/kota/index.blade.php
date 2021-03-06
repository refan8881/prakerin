@extends('layouts.master')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
        Data kota
        <a href="{{route('kota.create')}}" class="btn btn-primary float-right"> 
            tambah
         </a>
        </div>
            <div class="card-body">
               
                    <div class="table-responsive">
                        <table class="table">

                        <tr>
                            <th>No</th>
                            <th>provinsi</th>
                            <th>Kode Kota</th>
                            <th>kota</th>
                            <th>Aksi</th>
                            
                        </tr>
                        @php $no=1; @endphp
                        @foreach($kota as $data)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->provinsi->nama_provinsi}}</td>
                            <td>{{$data->kode_kota}}</td>
                            <td>{{$data->nama_kota}}</td>
                            <td>
                                <form action="{{route('kota.destroy',$data->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{route('kota.edit',$data->id)}}" class="btn btn-info">edit</a>
                                <a href="{{route('kota.show',$data->id)}}" class="btn btn-warning">show</a>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('aslina eta teh ?')">Delete</button>
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