@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">{{ __('Data') }}</div>
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
                    <form action="{{ route('product.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Name of Product : </label>
                            <input type="text" class="form-control" name="name_product">
                        </div>
                        <div class="mb-3">
                            <label>Merk : </label>
                            <input type="text" class="form-control" name="merk">
                        </div>
                        <div class="mb-3">
                            <label>Price: </label>
                            <input type="text" class="form-control" name="price">
                        </div>
                        <div class="mb-3">
                            <label>Stock : </label>
                            <input type="number" class="form-control" name="stock">
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection