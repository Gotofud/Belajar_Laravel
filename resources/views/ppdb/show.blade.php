@extends('layouts.app')

@section('content')

<style>
        body {
            background-color: whitesmoke;
        }
    </style>
<div class="container w-75">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data PPDB') }}</div>

                <div class="card-body">
                    <form action="{{ route('ppdb.store', $ppdb->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="mb-3">
                            <label>Nama Lengkap : </label>
                            <input type="text" class="form-control" name="nama_lengkap" value="{{$ppdb->nama_lengkap}}" disabled>
                        </div>
                        <label>Jenis Kelamin : </label>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" disabled>
                            <label class="form-check-label">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" disabled>
                            <label class="form-check-label">
                                Perempuan
                            </label>
                        </div>
                        <div class="mb-3">
                            <label>Agama : </label>
                           <select name="agama" class="form-select" disabled>
                            <option value="Islam">Islam</option>
                            <option value="Nasrani">Kristen</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Konguchu">Konguchu</option>
                           </select>
                        </div>
                        <div class="mb-3">
                            <label> Alamat : </label>
                            <textarea name="alamat" class="form-control" value="{{$ppdb->alamat}}" disabled></textarea>
                        </div>
                        <div class="mb-3">
                            <label>No Telepon : </label>
                            <input type="number" class="form-control" name="telepon" value="{{$ppdb->telepon}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Asal Sekolah : </label>
                            <input type="text" class="form-control" name="asal_sekolah" value="{{$ppdb->asal_sekolah}}" disabled>
                        </div>
                        <a href="{{route('ppdb.index')}}" class="btn btn-warning">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

