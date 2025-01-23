@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data') }}</div>

                <div class="card-body">
                    <form action="{{ route('produk.update', $produk->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="mb-3">
                            <label>Nama Produk  : </label>
                            <input type="text" class="form-control" name="nama_produk" value="{{$produk->nama_produk}}">
                        </div>
                        <div class="mb-3">
                            <label>ID Kategori : </label>
                           <select name="id_kategori" class="form-select">
                            @foreach ( $kategori as $data )
                             <option value="{{$data->id}}" selected>{{$data->nama_kategori}}</option>
                            @endforeach    
                        </select> 
                        </div>
                        <div class="mb-3">
                            <label>Harga  : </label>
                            <input type="text" class="form-control" name="harga" value="{{$produk->harga}}">
                        </div>
                        <div class="mb-3">
                            <label>Stok  : </label>
                            <input type="number" class="form-control" name="stok" value="{{$produk->stok}}">
                        </div>
                        <div class="mb-3">
                            <label>Cover : </label>
                            <img src="{{ asset('/images/produk/' . $produk->cover)}}" width="100" class="rounded">
                            <input type="file" name="cover" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

