@extends('layouts-backend.index')
@section('page-title', 'Student')
@push('breadcumb-backend')
    <li class="breadcrumb-item">Admin</li>
    <li class="breadcrumb-item">Tables</li>
    <li class="breadcrumb-item active" aria-current="page">Student</li>
@endpush

@section('content-backend')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title">
                        Student Data
                    </h5>
                    <a href="{{ route('student.create') }}" class="btn btn-success btn-md">Add</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Avatar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($student as $see)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $see->name }}</td>
                                <td>
                                    <img src="{{ asset('uploads/avatar/' . $see->avatar) }}" alt="" width="100">
                                </td>
                                <td>
                                    <form action="{{ route('student.destroy', $see->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-md">Delete</button>
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
