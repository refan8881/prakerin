@extends('layouts.master')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
        Data rw
        <a href="{{route('rw.create')}}" class="btn btn-primary float-right"> 
            tambah rw
         </a>
        </div>
            <div class="card-body">
               
                    <div class="table-responsive">
                        <table class="table">

                        <tr>
                            <th>No</th>
                            <th>Nama Desa</th>
                            <th>No Rw</th>
                            
                        </tr>
                        @php $no=1; @endphp
                        @foreach($rw as $data)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->desa->nama_desa}}</td>
                            <td>{{$data->nama_rw}}</td>
                            <td>
                                <form action="{{route('rw.destroy',$data->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{route('rw.edit',$data->id)}}" class="btn btn-info">edit</a>
                                <a href="{{route('rw.show',$data->id)}}" class="btn btn-warning">show</a>
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