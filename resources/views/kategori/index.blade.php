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
                                                <th scope="col">Id</th>
                                                <th scope="col">Nama Kategori</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($kategori as $data)
                                                <tr>
                                                    <th scope="row">{{ $no++ }}</th>
                                                    <td>{{ $data->id }}</td>
                                                    <td>{{ $data->nama_kategori }}</td>
                                                    <td>
                                                        <form action="{{route('kategori.destroy', $data->id)}}"
                                                            method="POST">
                                                            <a href="{{route('kategori.edit', $data->id)}}"
                                                                class="btn btn-success">Edit</a>
                                                            <a href="{{route('kategori.show', $data->id)}}"
                                                                class="btn btn-warning">Show</a>
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
                                    <a href="{{route('kategori.create')}}" class="btn btn-primary">Add</a>
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