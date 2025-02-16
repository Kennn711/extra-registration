@extends('layouts-backend.index')
@section('page-title', 'Leader')

@push('breadcumb-backend')
    <li class="breadcrumb-item">Admin</li>
    <li class="breadcrumb-item">Tables</li>
    <li class="breadcrumb-item">Extra Leader</li>
    <li class="breadcrumb-item active">Add Extra Leader</li>
@endpush
@section('content-backend')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="justify-content-center align-items-center">
                    <h1>Form Add Leader</h1>
                </div>

                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('extraleader.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label>Fullname : </label>
                            <input type="text" name="name" class="form-control mb-2">

                            <label>Email : </label>
                            <input type="email" name="email" class="form-control mb-2">

                            <label>Password : </label>
                            <input type="password" name="password" class="form-control mb-2">

                            <label>Avatar : </label>
                            <input type="file" name="avatar" class="form-control mb-2">
                            <button class="btn btn-success btn-md">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
