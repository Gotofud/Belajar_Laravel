@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data') }}</div>

                <div class="card-body">
                    <form action="{{ route('telepon.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <!-- <div class="mb-3">
                            <label>NIS Siswa : </label>
                            <input type="number" class="form-control" name="nis">
                        </div> -->
                        <div class="mb-3">
                            <label>Nomor  : </label>
                            <input type="text" class="form-control" name="nomor">
                        </div>
                        <div class="mb-3">
                            <label>ID Pengguna : </label>
                           <select name="id_pengguna" class="form-select">
                            @foreach ( $pengguna as $data )
                             <option value="{{$data->id}}">{{$data->nama}}</option>
                            @endforeach    
                        </select> 
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

