@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data') }}</div>

                <div class="card-body">
                <form action="{{ route('genre.update', $genre->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="mb-3">
                            <label>Nama genre: </label>
                            <input type="text" class="form-control" name="genre"  value="{{ $genre->genre}}" disabled>
                        </div>
                        <a href="{{route('genre.index')}}" class="btn btn-warning">Kembali</a>    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection