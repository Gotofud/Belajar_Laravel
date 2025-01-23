@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Siswa') }}</div>

                <div class="card-body">
                    <form action="{{ route('siswa.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                            <label>NIS Siswa : </label>
                            <input type="number" class="form-control" name="nis">
                        </div>
                        <div class="mb-3">
                            <label>Nama Siswa : </label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <label>Jenis Kelamin : </label>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="jk" value="Laki-laki">
                            <label class="form-check-label">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="jk" value="Perempuan">
                            <label class="form-check-label">
                                Perempuan
                            </label>
                        </div>
                        <div class="mb-3">
                            <label>Kelas : </label>
                            <select name="kelas" class="form-select">
                                <option value="Kelas X">Kelas X</option>
                                <option value="Kelas XI">Kelas XI</option>
                                <option value="Kelas XII">Kelas XII</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Cover : </label>
                            <input type="file" class="form-control" name="cover">
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

