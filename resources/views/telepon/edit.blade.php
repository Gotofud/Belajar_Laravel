@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data') }}</div>

                <div class="card-body">
                    <form action="{{ route('telepon.update', $telepon->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label>Nomor : </label>
                            <input type="text" class="form-control" name="nomor" value="{{$telepon->nomor}}">
                        </div>
                        <div class="mb-3">
                            <label>ID Pengguna : </label>
                            <select name="id_pengguna" class="form-select">
                                @foreach ($pengguna as $data)
                                    <option value="{{$data->id}}" {{$data->id == $telepon->id_pengguna ? 'selected' : '' }}>
                                        {{$data->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success" name="save">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection