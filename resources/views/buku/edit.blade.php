@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data') }}</div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    <form action="{{ route('buku.update', $buku->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="mb-3">
                            <label>Nama buku  : </label>
                            <input type="text" class="form-control" name="nama_buku" value="{{$buku->nama_buku}}">
                        </div>
                        <div class="mb-3">
                            <label>ID Genre : </label>
                           <select name="id_genre" class="form-select">
                            @foreach ( $genre as $data )
                             <option value="{{$data->id}}" selected>{{$data->genre}}</option>
                            @endforeach    
                        </select> 
                        </div>
                        <div class="mb-3">
                            <label>ID Penerbit : </label>
                           <select name="id_penerbit" class="form-select">
                            @foreach ( $penerbit as $data )
                             <option value="{{$data->id}}" selected>{{$data->nama_penerbit}}</option>
                            @endforeach    
                        </select> 
                        </div>
                        <div class="mb-3">
                            <label>Harga  : </label>
                            <input type="text" class="form-control" name="harga" value="{{$buku->harga}}">
                        </div>
                        <div class="mb-3">
                            <label>Stok  : </label>
                            <input type="number" class="form-control" name="stok"  value="{{$buku->stok}}">
                        </div>
                        <div class="mb-3">
                            <label>Tanggal Terbit : </label>
                            <input type="date" name="tanggal_terbit" class="form-control"  value="{{$buku->tanggal_terbit}}">
                        </div>
                        <div class="mb-3">
                            <label>Cover : </label>
                            <img src="{{asset('/images/buku/' . $buku->image)}}" class="rounded" width="100">
                            <input type="file" class="form-control" name="image">
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

