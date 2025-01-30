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
                                <th scope="col">Id</th>
                                <th scope="col">Genre</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($genre as $data)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->genre }}</td>
                                    <td>
                                        <form action="{{route('genre.destroy', $data->id)}}" method="POST">
                                            <a href="{{route('genre.edit', $data->id)}}" class="btn btn-success">Edit</a>
                                            <a href="{{route('genre.show', $data->id)}}" class="btn btn-warning">Show</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Apakah anda yakin?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <a href="{{route('genre.create')}}" class="btn btn-primary">Add</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection