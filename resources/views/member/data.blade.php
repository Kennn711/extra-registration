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
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
@endsection
