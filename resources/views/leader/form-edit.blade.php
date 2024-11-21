@extends('layouts.index')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="justify-content-center align-items-center">
                    <h1>Form Edit Leader</h1>
                </div>

                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('extraleader.update', $leader->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <label>Fullname : </label>
                            <input type="text" value="{{ $leader->name }}" name="name" class="form-control mb-2">

                            <label>Email : </label>
                            <input type="email" value="{{ $leader->email }}" name="email" class="form-control mb-2">

                            <label>Password : </label>
                            <input type="password" name="password" class="form-control mb-2">

                            <label>Old Avatar : </label>
                            <img src="{{ asset('uploads/avatar/' . $leader->avatar) }}" class="form-control mb-2">

                            <label>Add new Avatar : </label>
                            <input type="file" name="avatar" class="form-control mb-2">
                            <button class="btn btn-warning btn-md">Change</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
