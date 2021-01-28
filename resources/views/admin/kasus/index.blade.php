@extends('layouts.master')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
        Data rw
        <a href="{{route('kasus.create')}}" class="btn btn-primary float-right"> 
            tambah rw
         </a>
        </div>
            <div class="card-body">
               
                    <div class="table-responsive">
                        <table class="table">

                        <tr>
                            <th>No</th>
                            <th>RW</th>
                            <th>Jumlah Positif</th>
                            <th>Jumlah Meninggal</th>
                            <th>Jumlah Sembuh</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                            
                        </tr>
                        @php $no=1; @endphp
                        @foreach($kasus as $data)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>RW {{$data->rw->nama_rw}}</td>
                            <td>{{$data->positif}} Orang</td>
                            <td>{{$data->meninggal}} Orang</td>
                            <td>{{$data->sembuh}} Orang</td>
                            <td>{{$data->tanggal}} Orang</td>
                            <td>
                                <form action="{{route('kasus.destroy',$data->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{route('kasus.edit',$data->id)}}" class="btn btn-info">edit</a>
                                <a href="{{route('kasus.show',$data->id)}}" class="btn btn-warning">show</a>
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