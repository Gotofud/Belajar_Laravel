@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Siswa') }}</div>

                <div class="card-body">
                    <form action="{{ route('siswa.update', $siswa->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="mb-3">
                            <label>NIS Siswa : </label>
                            <input type="number" class="form-control" name="nis" value="{{ $siswa->nis}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Nama Siswa : </label>
                            <input type="text" class="form-control" name="nama"  value="{{ $siswa->nama}}" disabled>
                        </div>
                        <label>Jenis Kelamin : </label>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="jk" value="Laki-laki" disabled>
                            <label class="form-check-label">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="jk" value="Perempuan" disabled>
                            <label class="form-check-label">
                                Perempuan
                            </label>
                        </div>
                        <div class="mb-3">
                            <label>Kelas : </label>
                            <select name="kelas" class="form-select" disabled>
                                <option value="Kelas X">Kelas X</option>
                                <option value="Kelas XI">Kelas XI</option>
                                <option value="Kelas XII">Kelas XII</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Cover : </label>
                            <img src="{{ asset('/images/siswa/' . $siswa->cover)}}" width="100" class="rounded">
                        </div>
                        <a href="{{route('siswa.index')}}" class="btn btn-warning">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection