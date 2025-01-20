@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Siswa') }}</div>

                <div class="card-body">
                    <form action="{{ route('pengguna.update', $pengguna->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                            <label>Id  : </label>
                            <input type="text" class="form-control" name="id" value="{{ $pengguna->id}}" disabled>
                        </div>
                    <div class="mb-3">
                            <label>Nama  : </label>
                            <input type="text" class="form-control" name="nama" value="{{ $pengguna->nama}}" disabled>
                        </div>
                        <a href="{{route('pengguna.index')}}" class="btn btn-warning">Kembali</a>                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection