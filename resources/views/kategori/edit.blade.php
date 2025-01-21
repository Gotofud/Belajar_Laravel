@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data') }}</div>

                <div class="card-body">
                <form action="{{ route('kategori.update', $kategori->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="mb-3">
                            <label>Nama Kategori : </label>
                            <input type="text" class="form-control" name="nama_kategori"  value="{{ $kategori->nama_kategori}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection