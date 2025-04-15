@include('layouts.admin.header')

<body>

    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.admin.navigation')
        <!-- /.sidebar -->
        @include('layouts.admin.sidebar')


        <div id="page-wrapper">
            <div class="container-fluid">
                <h1 class="page-header">Siswa</h1>
                <div class="card">
                    <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        {{session('success')}} <a href="#" class="alert-link"></a>
                                    </div>
                        @endif
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Data Produk
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Cover</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">ID Barang</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($produk as $data)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>
                                        <img src="{{asset('/images/produk/' . $data->cover)}}" class="rounded" width="75" height="75"   >
                                    </td>
                                    <td>{{ $data->nama_produk }}</td>
                                    <td>{{ $data->kategori->nama_kategori }}</td>
                                    <td>{{ $data->harga }}</td>
                                    <td>{{ $data->stok }}</td>

                                    <td>
                                        <form action="{{route('produk.destroy', $data->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('produk.edit', $data->id)}}" class="btn btn-success">Edit</a>
                                            <a href="{{route('produk.show', $data->id)}}" class="btn btn-warning">Show</a>
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Apakah anda yakin?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                                    <a href="{{route('produk.create')}}" class="btn btn-primary">Add</a>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- Js -->
    @include('layouts.admin.script')
</body>

</html>

