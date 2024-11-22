@extends('layouts-backend.index')
@section('page-title', 'Leader Data')

@push('breadcumb-backend')
    <li class="breadcrumb-item">Admin</li>
    <li class="breadcrumb-item">Tables</li>
    <li class="breadcrumb-item active" aria-current="page">Extra Leader</li>
@endpush

@section('content-backend')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title">
                        Extracullicular Leader Data
                    </h5>
                    <a href="{{ route('extraleader.create') }}" class="btn btn-success btn-md">Add</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Avatar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($leader as $see)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $see->name }}</td>
                                <td>{{ $see->email }}</td>
                                <td>
                                    <img src="{{ asset('uploads/avatar/' . $see->avatar) }}" alt="" width="100">
                                </td>
                                <td>
                                    <form action="{{ route('extraleader.destroy', $see->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-md">Delete</button>
                                        <a href="{{ route('extraleader.edit', $see->id) }}" class="btn btn-warning btn-md">Edit</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
@endsection
