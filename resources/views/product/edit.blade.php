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
                            <label>Name of Product : </label>
                            <input type="text" class="form-control" name="name_product" value="{{$product->name_product}}">
                        </div>
                        <div class="mb-3">
                            <label>Merk : </label>
                            <input type="text" class="form-control" name="merk" value="{{$product->merk}}">
                        </div>
                        <div class="mb-3">
                            <label>Price: </label>
                            <input type="text" class="form-control" name="price" value="{{$product->price}}">
                        </div>
                        <div class="mb-3">
                            <label>Stock : </label>
                            <input type="number" class="form-control" name="stock" value="{{$product->stock}}">
                        </div>
                        <button type="submit" class="btn btn-success" name="save">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

