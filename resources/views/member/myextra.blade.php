@extends('layouts-frontend/index');
@section('content-frontend')
    <div class="row  justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">
                                Your Extracullicular
                            </h5>
                            <p>Leader Name :
                                {{ $leader->first()->leader->name }}<b></b>
                            </p>
                        </div>
                        <a href="{{ route('extraleader.create') }}" class="btn btn-danger btn-md">Exit</a>
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($member as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->user->email }}</td>
                                    <td>
                                        @if (!empty($item->user->avatar))
                                            <img src="{{ asset('uploads/avatar' . $see->avatar) }}" alt="">
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
@endsection
