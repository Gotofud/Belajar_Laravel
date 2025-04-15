@include('layouts.admin.header')

<body>

    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.admin.navigation')
        <!-- /.sidebar -->
        @include('layouts.admin.sidebar')

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tambah Produk</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif          
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Data
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form action="{{ route('produk.update', $produk->id)}}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label>Nama Produk : </label>
                                                <input class="form-control" name="nama_produk"
                                                    value="{{$produk->nama_produk}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Kategori : </label>
                                                <select name="id_kategori" class="form-control">
                                                    @foreach ($kategori as $data)
                                                        <option value="{{$data->id}}" selected>{{$data->nama_kategori}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Harga : </label>
                                                <input class="form-control" name="harga" value="{{$produk->harga}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Stok : </label>
                                                <input type="number" class="form-control" name="stok"
                                                    value="{{$produk->stok}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Cover : </label>
                                                <img src="{{ asset('/images/produk/' . $produk->cover)}}" width="100"
                                                    class="rounded">
                                                <input type="file" name="cover">
                                            </div>
                                            <button type="submit" class="btn btn-success" name="save">Save</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>


    </div>
    <!-- /#wrapper -->
    <!-- Js -->
    @include('layouts.admin.script')
</body>

</html>