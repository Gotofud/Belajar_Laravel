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
                                        {{session('success')}}<a href="#" class="alert-link"></a>
                                    </div>
                        @endif
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Data Siswa
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Picture</th>
                                                <th>NIS</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Kelas</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($siswa as $data)
                                                <tr>
                                                    <th scope="row">{{ $no++ }}</th>
                                                    <td>
                                                        <img src="{{asset('/images/siswa/' . $data->cover)}}"
                                                            class="rounded" width="75" height="75">
                                                    </td>
                                                    <td>{{ $data->nis }}</td>
                                                    <td>{{ $data->nama }}</td>
                                                    <td>{{ $data->jenis_kelamin }}</td>
                                                    <td>{{ $data->kelas }}</td>
                                                    <td>
                                                        <form action="{{route('siswa.destroy', $data->id)}}" method="POST">
                                                            <a href="{{route('siswa.edit', $data->id)}}"
                                                                class="btn btn-success btn-sm">Edit</a>
                                                            <a href="{{route('siswa.show', $data->id)}}"
                                                                class="btn btn-warning btn-sm">Show</a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Apakah anda yakin?')">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <a href="{{route('siswa.create')}}" class="btn btn-primary">Add</a>
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