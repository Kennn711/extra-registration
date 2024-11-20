@extends('layouts.index')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="justify-content-center align-items-center">
                    <h1>Form Tambah Ketua Ekstra</h1>
                </div>

                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('extraleader.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label>Nama Lengkap : </label>
                            <input type="text" name="name" class="form-control mb-2">

                            <label>Email : </label>
                            <input type="email" name="email" class="form-control mb-2">

                            <label>Password : </label>
                            <input type="password" name="password" class="form-control mb-2">

                            <label>Avatar : </label>
                            <input type="file" name="avatar" class="form-control mb-2">
                            <button class="btn btn-success btn-md">Buat</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
