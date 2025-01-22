@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">{{ __('Data') }}</div>

                <div class="card-body">
                    <form action="{{ route('order.update', $order->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label>ID Customer : </label>
                            <select name="id_customer" class="form-select" disabled>
                                @foreach ($customer as $data)
                                    <option value="{{$data->id}}" {{$data->id == $order->id_customer ? 'selected' : '' }}>
                                        {{$data->name_customer}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>ID Product : </label>
                            <select name="id_product" class="form-select" disabled>
                                @foreach ($product as $data)
                                    <option value="{{$data->id}}" {{$data->id == $order->id_product ? 'selected' : '' }}>
                                        {{$data->name_product}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Quantity : </label>
                            <input type="number" class="form-control" name="quantity" value="{{$order->quantity}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Order Date : </label>
                            <input type="date" class="form-control" name="order_date" value="{{$order->order_date}}" disabled>
                        </div>
                        <a href="{{route('order.index')}}" class="btn btn-warning">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection