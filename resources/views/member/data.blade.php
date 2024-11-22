@extends('layouts-backend.index')
@section('page-title', 'Member Data')

@push('breadcumb-backend')
    <li class="breadcrumb-item">Leader</li>
    <li class="breadcrumb-item">Tables</li>
    <li class="breadcrumb-item active" aria-current="page">Members</li>
@endpush

@section('content-backend')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title">
                        Extracullicular Members Data
                    </h5>
                    <a href="{{ route('member.create') }}" class="btn btn-success btn-md">Add Member</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Reason</th>
                            <th>Date Of Registration</th>
                            <th>Avatar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($member as $see)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $see->user->name }}</td>
                                <td>{{ $see->user->email }}</td>
                                <td>{{ $see->reason }}</td>
                                <td>{{ $see->date_of_registration }}</td>
                                <td>
                                    <img src="{{ asset('uploads/avatar/' . $see->user->avatar) }}" alt="" width="100">
                                </td>
                                <td>
                                    <form action="{{ route('member.destroy', $see->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-md">Kick</button>
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
