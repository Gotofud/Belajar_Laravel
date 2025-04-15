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
                        <h1 class="page-header">Tampil Siswa</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Data
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form action="{{ route('siswa.update', $siswa->id)}}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label>NIS : </label>
                                                <input type="number" class="form-control" name="nis"
                                                    value="{{ $siswa->nis}}" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Siswa : </label>
                                                <input class="form-control" name="nama" value="{{ $siswa->nama}}" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis Kelamin : </label>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="jk" id="optionsRadios1"
                                                            value="Laki-laki" disabled>Laki-laki
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="jk" id="optionsRadios2"
                                                            value="Perempuan" disabled>Perempuan
                                                    </label> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Kelas : </label>
                                                <select name="kelas" class="form-control" disabled>
                                                    <option value="Kelas X">Kelas X</option>
                                                    <option value="Kelas XI">Kelas XI</option>
                                                    <option value="Kelas XII">Kelas XII</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Cover : </label>
                                                <img src="{{ asset('/images/siswa/' . $siswa->cover)}}" width="100"
                                                    class="rounded">
                                            </div>
                                            <a href="{{route('siswa.index')}}" class="btn btn-warning">Kembali</a>
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