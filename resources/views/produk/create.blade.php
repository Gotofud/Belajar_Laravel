@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data') }}</div>

                <div class="card-body">
                    <form action="{{ route('produk.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                            <label>Nama Produk  : </label>
                            <input type="text" class="form-control" name="nama_produk">
                        </div>
                        <div class="mb-3">
                            <label>ID Kategori : </label>
                           <select name="id_kategori" class="form-select">
                            @foreach ( $kategori as $data )
                             <option value="{{$data->id}}">{{$data->nama_kategori}}</option>
                            @endforeach    
                        </select> 
                        </div>
                        <div class="mb-3">
                            <label>Harga  : </label>
                            <input type="text" class="form-control" name="harga">
                        </div>
                        <div class="mb-3">
                            <label>Stok  : </label>
                            <input type="number" class="form-control" name="stok">
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

