@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data') }}</div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                <form action="{{ route('penerbit.update', $penerbit->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="mb-3">
                            <label>Nama Penerbit: </label>
                            <input type="text" class="form-control" name="nama_penerbit"  value="{{ $penerbit->nama_penerbit}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection