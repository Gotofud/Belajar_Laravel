@include('layouts.header')

<body>

    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.navigation')
        <!-- /.sidebar -->
        @include('layouts.sidebar')


        <div id="page-wrapper">
            <div class="container-fluid">
                <h1 class="page-header">Show Data Barang</h1>
                <div class="card">
                <div class="card-header "></div>
                <div class="card-body">
                    <form action="{{ route('product.show', $product->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="mb-3">
                            <label>Id : </label>
                            <input type="text" class="form-control" name="name_product" value="{{$product->id}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Name of Product : </label>
                            <input type="text" class="form-control" name="name_product" value="{{$product->name_product}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Merk : </label>
                            <input type="text" class="form-control" name="merk" value="{{$product->merk}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Price: </label>
                            <input type="text" class="form-control" name="price" value="{{$product->price}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Stock : </label>
                            <input type="number" class="form-control" name="stock" value="{{$product->stock}}" disabled>
                        </div>
                        <a href="{{route('product.index')}}" class="btn btn-warning" style="margin-top:10px;">Back</a>
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