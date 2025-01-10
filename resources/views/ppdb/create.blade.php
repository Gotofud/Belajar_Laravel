@extends('layouts.app')

@section('content')

<style>
        body {
            background-color: whitesmoke;
        }
    </style>
<header class="text-white py-3">
        <div class="container w-50">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Informasi</h5>
                    <div class="form-text mb-2">Apabila anda telah melakukan pendaftaran, silahkan klik tombol "Cek Status
                    Pendaftaran"</div>
                    <div class="d-flex gap-3">
                        <a href="#" class="btn btn-primary">Cek Status Pendaftaran</a>
                        <a href="https://www.youtube.com/watch?v=0itOCgJtNVU" class="btn btn-warning text-white">Kembali ke Home</a>
                        <a href="https://smkassalaambandung.sch.id/" class="btn btn-danger">Situs Resmi SMK ASSALAAM</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
<div class="container w-75">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('PPDB') }}</div>

                <div class="card-body">
                    <form action="{{ route('ppdb.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                            <label>Nama Lengkap : </label>
                            <input type="text" class="form-control" name="nama_lengkap">
                        </div>
                        <label>Jenis Kelamin : </label>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki">
                            <label class="form-check-label">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
                            <label class="form-check-label">
                                Perempuan
                            </label>
                        </div>
                        <div class="mb-3">
                            <label>Agama : </label>
                           <select name="agama" class="form-select">
                            <option value="Islam">Islam</option>
                            <option value="Nasrani">Kristen</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Konguchu">Konguchu</option>
                           </select>
                        </div>
                        <div class="mb-3">
                            <label> Alamat : </label>
                            <textarea name="alamat" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <label>No Telepon : </label>
                            <input type="number" class="form-control" name="telepon">
                        </div>
                        <div class="mb-3">
                            <label>Asal Sekolah : </label>
                            <input type="text" class="form-control" name="asal_sekolah">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

