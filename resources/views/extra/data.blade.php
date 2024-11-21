@extends('layouts.index')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Extracullicular Data</h1>
                    <a href="{{ route('extra.create') }}" class="btn btn-success">Add</a>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Extracullicular</th>
                                    <th>Day</th>
                                    <th>Description</th>
                                    <th>Logo</th>
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
                                        <td>
                                            <img src="{{ asset('uploads/logo/' . $see->logo) }}" alt="" width="50">
                                        </td>
                                        <td>
                                            <form action="{{ route('extra.destroy', $see->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
