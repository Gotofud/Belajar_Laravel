@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">{{ __('Data') }}</div>

                <div class="card-body">
                    <form action="{{ route('product.update', $product->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="mb-3">
                            <label>Id : </label>
                            <input type="text" class="form-control" name="name_product" value="{{$product->id}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Name of Product : </label>
                            <input type="text" class="form-control" name="name_product" value="{{$product->name_product}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Merk : </label>
                            <input type="text" class="form-control" name="merk" value="{{$product->merk}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Price: </label>
                            <input type="text" class="form-control" name="price" value="{{$product->price}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Stock : </label>
                            <input type="number" class="form-control" name="stock" value="{{$product->stock}}" disabled>
                        </div>
                        <a href="{{route('product.index')}}" class="btn btn-warning">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

