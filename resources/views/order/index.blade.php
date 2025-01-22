@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header bg-dark text-white">Pages</div>
                <div class="card-body bg-light">
                    <a href="{{route('product.index')}}" class="btn btn-success btn-sm mb-2">Product</a>
                    <a href="{{route('customer.index')}}" class="btn btn-warning btn-sm">Customer</a></li>
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <div class="card w-100">
                <div class="card-header bg-dark text-white">{{ __('Data') }}</div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{session('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <table class="table table-light table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Id Customer</th>
                                <th scope="col">Id Product</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($order as $data)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $data->customer->name_customer }}</td>
                                    <td>{{ $data->product->name_product }}</td>
                                    <td>{{ $data->quantity }}</td>
                                    <td>{{ $data->order_date }}</td>
                                    <td>
                                        <form action="{{route('order.destroy', $data->id)}}" method="POST">
                                            <a href="{{route('order.edit', $data->id)}}"
                                                class="btn btn-success btn-sm">Edit</a>
                                            <a href="{{route('order.show', $data->id)}}"
                                                class="btn btn-warning btn-sm">Show</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure? Deleted data cannot be restored')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <a href="{{route('order.create')}}" class="btn btn-primary">Add</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection