@extends('layouts-backend.index')
@section('page-title', 'Extracullicular Data')

@push('breadcumb-backend')
    <li class="breadcrumb-item">Admin</li>
    <li class="breadcrumb-item">Tables</li>
    <li class="breadcrumb-item active" aria-current="page">Extracullicular</li>
@endpush
@section('content-backend')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title">
                        Extracullicular Data
                    </h5>
                    <a href="{{ route('extra.create') }}" class="btn btn-success btn-md">Add</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Extracullicular</th>
                            <th>Day</th>
                            <th>Description</th>
                            <th>Leader Name</th>
                            <th>Avatar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($extra as $see)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $see->name }}</td>
                                <td>{{ $see->time }}</td>
                                <td>{{ $see->description }}</td>
                                <td>{{ $see->leader->name ?? '' }}</td>
                                <td>
                                    <img src="{{ asset('uploads/logo/' . $see->logo) }}" alt="" width="100">
                                </td>
                                <td>
                                    <form action="{{ route('extra.destroy', $see->id) }}" method="POST">
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
