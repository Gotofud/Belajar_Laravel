@include('layouts.header')

<body>

    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.navigation')
        <!-- /.sidebar -->
        @include('layouts.sidebar')


        <div id="page-wrapper">
            <div class="container-fluid">
                <h1 class="page-header">Edit Data Barang</h1>
                <div class="card">
                <div class="card-header bg-dark text-white"></div>

                <div class="card-body">
                    <form action="{{ route('product.update', $product->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="mb-3">
                            <label>Name of Product : </label>
                            <input type="text" class="form-control" name="name_product" value="{{$product->name_product}}">
                        </div>
                        <div class="mb-3">
                            <label>Merk : </label>
                            <input type="text" class="form-control" name="merk" value="{{$product->merk}}">
                        </div>
                        <div class="mb-3">
                            <label>Price: </label>
                            <input type="text" class="form-control" name="price" value="{{$product->price}}">
                        </div>
                        <div class="mb-3">
                            <label>Stock : </label>
                            <input type="number" class="form-control" name="stock" value="{{$product->stock}}">
                        </div>
                        <button type="submit" class="btn btn-success" name="save" style="margin-top:10px;">Save</button>
                    </form>
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