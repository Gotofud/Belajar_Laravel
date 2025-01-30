@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-white #">
                <div class="card-header">{{ __('Data Siswa') }}</div>

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
                                <th scope="col">#</th>
                                <th scope="col">Id Pembeli</th>
                                <th scope="col">Nama Pembeli</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($pembeli as $data)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->nama_pembeli }}</td>
                                    <td>{{ $data->jenis_kelamin }}</td>
                                    <td>{{ $data->telepon }}</td>
                                    <td>
                                        <form action="{{route('pembeli.destroy', $data->id)}}" method="POST">
                                            <a href="{{route('pembeli.edit', $data->id)}}" class="btn btn-success btn-sm">Edit</a>
                                            <a href="{{route('pembeli.show', $data->id)}}" class="btn btn-warning btn-sm">Show</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Apakah anda yakin?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <a href="{{route('pembeli.create')}}" class="btn btn-primary">Add</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection