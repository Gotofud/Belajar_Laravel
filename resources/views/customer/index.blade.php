@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">{{ __('Data') }}</div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <table class="table table-light table-striped">
                    <a href="{{route('product.index')}}" class="btn btn-success btn-sm mx-2">Product</a>
                    <a href="{{route('order.index')}}" class="btn btn-warning btn-sm">Order</a>
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($customer as $data)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $data->name_customer }}</td>
                                    <td>{{ $data->gender }}</td>
                                    <td>{{ $data->contact }}</td>
                                    <td>
                                        <form action="{{route('customer.destroy', $data->id)}}" method="POST">
                                            <a href="{{route('customer.edit', $data->id)}}" class="btn btn-success btn-sm">Edit</a>
                                            <a href="{{route('customer.show', $data->id)}}" class="btn btn-warning btn-sm">Show</a>
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

                    <a href="{{route('customer.create')}}" class="btn btn-primary">Add</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection