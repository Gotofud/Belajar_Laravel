@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data') }}</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{session('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Id Buku</th>
                                <th scope="col">Cover</th>
                                <th scope="col">Nama Buku</th>
                                <th scope="col">Id Genre</th>
                                <th scope="col">Id Penerbit</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Tanggal Terbit</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($buku as $data)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $data->id }}</td>
                                    <td>
                                        <img src="{{asset('/images/buku/' . $data->image)}}" class="rounded" width="100">
                                    </td>
                                    <td>{{ $data->nama_buku }}</td>
                                    <td>{{ $data->genre->genre }}</td>
                                    <td>{{ $data->penerbit->nama_penerbit }}</td>
                                    <td>{{ $data->harga }}</td>
                                    <td>{{ $data->stok }}</td>
                                    <td>{{ $data->tanggal_terbit }}</td>

                                    <td>
                                        <form action="{{route('buku.destroy', $data->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('buku.edit', $data->id)}}" class="btn btn-success">Edit</a>
                                            <a href="{{route('buku.show', $data->id)}}" class="btn btn-warning">Show</a>
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Apakah anda yakin?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <a href="{{route('buku.create')}}" class="btn btn-primary">Add</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection