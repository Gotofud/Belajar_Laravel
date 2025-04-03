@include('layouts.header')

<body>

    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.navigation')
        <!-- /.sidebar -->
        @include('layouts.sidebar')


        <div id="page-wrapper">
            <div class="container-fluid">
                <h1 class="page-header">Data Barang</h1>
                <div class="card" style="width:105rem; margin-top:10px;">
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
                                    <th scope="col">Id Product</th>
                                    <th scope="col">Name Product</th>
                                    <th scope="col">Merk</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($product as $data)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->name_product }}</td>
                                        <td>{{ $data->merk }}</td>
                                        <td>{{ $data->price }}</td>
                                        <td>{{ $data->stock }}</td>
                                        <td>
                                            <form action="{{route('product.destroy', $data->id)}}" method="POST">
                                                <a href="{{route('product.edit', $data->id)}}"
                                                    class="btn btn-success btn-sm">Edit</a>
                                                <a href="{{route('product.show', $data->id)}}"
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

                        <a href="{{route('product.create')}}" class="btn btn-primary">Add</a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- Js -->
    @include('layouts.script')
</body>

</html>