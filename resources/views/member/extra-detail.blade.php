@extends('layouts-frontend/index')
@section('content-frontend')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @foreach ($extraName as $item)
                    <h3>{{ $item->name }} Extracullicular</h3>
                @endforeach
                <div class="card shadow">
                    <div class="card-body">
                        @foreach ($extraLeader as $see2)
                            <h5 class="fw-bold">Extra Leader : {{ $see2->name }}</h5>
                        @endforeach
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Fullname</th>
                                    <th>Email</th>
                                    <th>Date Of Registration</th>
                                    <th>Avatar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($extra as $see)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $see->user->name }}</td>
                                        <td>{{ $see->user->email }}</td>
                                        <td>{{ $see->date_of_registration }}</td>
                                        <td>
                                            @if (!empty($see->user->avatar))
                                                <img src="{{ asset('uploads/avatar/' . $see->user->avatar) }}" alt="" width="100">
                                            @else
                                                None
                                            @endif
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
