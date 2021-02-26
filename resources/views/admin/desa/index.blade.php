@extends('layouts.master')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
        Data desa
        <a href="{{route('desa.create')}}" class="btn btn-primary float-right"> 
            tambah desa
         </a>
        </div>
            <div class="card-body">
               
                    <div class="table-responsive">
                        <table class="table">

                        <tr>
                            <th>No</th>
                            <th>Nama Kecamatan</th>
                            <th>Nama desa</th>
                            
                        </tr>
                        @php $no=1; @endphp
                        @foreach($desa as $data)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->kecamatan->nama_kecamatan}}</td>
                            <td>{{$data->nama_desa}}</td>
                            <td>
                                <form action="{{route('desa.destroy',$data->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{route('desa.edit',$data->id)}}" class="btn btn-info">edit</a>
                                <a href="{{route('desa.show',$data->id)}}" class="btn btn-warning">show</a>
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