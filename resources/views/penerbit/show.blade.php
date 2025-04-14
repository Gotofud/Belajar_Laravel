@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data') }}</div>

                <div class="card-body">
                <form action="{{ route('penerbit.show', $penerbit->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="mb-3">
                            <label>Nama Penerbit: </label>
                            <input type="text" class="form-control" name="nama_penerbit"  value="{{ $penerbit->nama_penerbit}}" disabled>
                        </div>
                        <a href="{{route('penerbit.index')}}" class="btn btn-warning">Kembali</a>    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection