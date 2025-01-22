@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">{{ __('Data') }}</div>

                <div class="card-body">
                    <form action="{{ route('customer.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                            <label>Customer Name : </label>
                            <input type="text" class="form-control" name="name_customer">
                        </div>
                        <div class="mb-3">
                            <label>Gender : </label>
                            <select name="gender" class="form-select">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Contact: </label>
                            <input type="text" class="form-control" name="contact">
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

