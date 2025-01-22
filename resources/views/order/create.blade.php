@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">{{ __('Data') }}</div>

                <div class="card-body">
                    <form action="{{ route('order.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>ID Customer : </label>
                            <select name="id_customer" class="form-select">
                                @foreach ($customer as $data)
                                    <option value="{{$data->id}}">{{$data->name_customer}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>ID Product : </label>
                            <select name="id_product" class="form-select">
                                @foreach ($product as $data)
                                    <option value="{{$data->id}}">{{$data->name_product}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Quantity : </label>
                            <input type="number" class="form-control" name="quantity">
                        </div>
                        <div class="mb-3">
                            <label>Order Date : </label>
                            <input type="date" class="form-control" name="order_date">
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection