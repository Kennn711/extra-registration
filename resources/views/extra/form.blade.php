@extends('layouts.index')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="justify-content-center align-items-center">
                    <h1>Form Tambah Ekstra</h1>
                </div>

                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('extra.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label>Nama Ekstra : </label>
                            <input type="text" name="name" class="form-control mb-2">

                            <label>Hari Ekstra : </label>
                            <input type="text" name="time" class="form-control mb-2">

                            <label>Deskripsi : </label>
                            <textarea name="description" id="" cols="30" rows="4" class="form-control mb-2"></textarea>

                            <label>Nama Ekstra : </label>
                            <input type="file" name="logo" class="form-control mb-2">
                            <button class="btn btn-success btn-md">Buat</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
