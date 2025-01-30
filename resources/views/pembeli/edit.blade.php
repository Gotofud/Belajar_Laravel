@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data pembeli') }}</div>

                <div class="card-body">   @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <form action="{{ route('pembeli.update', $pembeli->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="mb-3">
                            <label>Nama Pembeli : </label>
                            <input type="text" class="form-control" name="nama_pembeli" value="{{$pembeli->nama_pembeli}}">
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
                            <label>No Telp : </label>
                            <input type="text" class="form-control" name="telepon" value="{{$pembeli->telepon}}">
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

