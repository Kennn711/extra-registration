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
                <div class="d-flex justify-content-start align-items-center">
                    <h5 class="card-title">
                        Extracullicular Members Data
                    </h5>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Fullname</th>
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
                                <td>{{ $see->reason }}</td>
                                <td>{{ $see->date_of_registration }}</td>
                                <td>
                                    <img src="{{ asset('uploads/avatar/' . $see->user->avatar) }}" alt="" width="100">
                                </td>
                                <td>
                                    @if ($see->status == 'pending')
                                        <form action="{{ route('member.status', $see->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="status" value="accepted">
                                            <button class="btn btn-success btn-md">Accept</button>
                                        </form>
                                        <form action="{{ route('member.destroy', $see->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-md">Reject</button>
                                        </form>
                                    @endif
                                    @if ($see->status == 'accepted')
                                        <form action="{{ route('member.destroy', $see->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-md">Kick</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
@endsection
