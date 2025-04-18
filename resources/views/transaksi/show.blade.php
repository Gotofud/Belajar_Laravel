@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data') }}</div>

                <div class="card-body">
                    <form action="{{ route('transaksi.show', $transaksi->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                            <label>Nama Pembeli : </label>
                           <select name="id_pembeli" class="form-select" disabled>
                            @foreach ( $pembeli as $data )
                             <option value="{{$data->id}}" {{$data->id == $transaksi->id_pembeli ? 'selected' : ''}}> {{$data->nama_pembeli}}</option>
                             
                            @endforeach    
                        </select> 
                        </div>
                        <div class="mb-3">
                            <label>Buku : </label>
                            <img src="{{asset('/images/buku/' . $transaksi->buku->image)}}" class="rounded" width="100">
                           <select name="id_buku" class="form-select" disabled>
                            @foreach ( $buku as $data )
                             <option value="{{$data->id}}" {{$data->id == $transaksi->id_buku ? 'selected' : ''}}> {{$data->nama_buku}}</option>
                            @endforeach    
                        </select> 
                        </div>
                        <div class="mb-3">
                            <label>Jumlah  : </label>
                            <input type="text" class="form-control" name="jumlah" value="{{$transaksi->jumlah}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Tanggal Transaksi : </label>
                            <input type="date" name="tanggal_transaksi" class="form-control" value="{{$transaksi->tanggal_transaksi}}" disabled>
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

