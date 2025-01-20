@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data') }}</div>

                <div class="card-body">
                    <form action="{{ route('pengguna.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <!-- <div class="mb-3">
                            <label>NIS Siswa : </label>
                            <input type="number" class="form-control" name="nis">
                        </div> -->
                        <div class="mb-3">
                            <label>Nama  : </label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

