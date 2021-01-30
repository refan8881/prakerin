@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Kasus
                    </div>
                    <div class="card-body">
                        <form action="{{route('kasus.store')}}" method="post">
                            @csrf
                            @livewireScripts
                            @livewire('livewire')
                            @livewireStyles
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