@extends('layouts-backend.index')
@section('page-title', 'Extracullicular')

@push('breadcumb-backend')
    <li class="breadcrumb-item">Admin</li>
    <li class="breadcrumb-item">Tables</li>
    <li class="breadcrumb-item">Extracullicular</li>
    <li class="breadcrumb-item active">Add Extracullicular</li>
@endpush
@section('content-backend')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="justify-content-center align-items-center">
                    <h1>Form Add Ekxtracullicular</h1>
                </div>

                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('extra.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label>Extracullicular Name : </label>
                            <input type="text" name="name" class="form-control mb-2">

                            <label>Day : </label>
                            <input type="text" name="time" class="form-control mb-2">

                            <label>Description : </label>
                            <textarea name="description" id="" cols="30" rows="4" class="form-control mb-2"></textarea>

                            <label>Leader : </label>
                            <select name="extra_id" class="form-select mb-2">
                                <option selected disabled>Choose Leader : </option>
                                @foreach ($leader as $see)
                                    <option value="{{ $see->id }}">{{ $see->name }}</option>
                                @endforeach
                            </select>

                            <label>Logo : </label>
                            <input type="file" name="logo" class="form-control mb-2">
                            <button class="btn btn-success btn-md">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
