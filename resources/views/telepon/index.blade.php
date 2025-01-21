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
                                <th scope="col">Id Pengguna</th>
                                <th scope="col">Nomor</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($telepon as $data)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>

                                    <td>{{ $data->pengguna->nama }}</td>
                                    <td>{{ $data->nomor }}</td>
                                    <td>
                                        <form action="{{route('telepon.destroy', $data->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                            <a href="{{route('telepon.edit', $data->id)}}" class="btn btn-success">Edit</a>
                                            <a href="{{route('telepon.show', $data->id)}}" class="btn btn-warning">Show</a>
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Apakah anda yakin?')">Delete</button>
                                        </form> 
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <a href="{{route('telepon.create')}}" class="btn btn-primary">Add</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection