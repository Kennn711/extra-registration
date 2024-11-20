@extends('layouts.index')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Data Ketua Extra</h1>
                    <a href="{{ route('extraleader.create') }}" class="btn btn-primary">Tambah</a>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>Avatar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($leader as $see)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $see->name }}</td>
                                        <td>{{ $see->email }}</td>
                                        <td>
                                            @if (empty($see->avatar))
                                                <p>Tidak ada</p>
                                            @else
                                                <img src="{{ asset('uploads/avatar/' . $see->avatar) }}" alt="" width="50">
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{ route('extraleader.destroy', $see->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                            <a href="{{ route('extraleader.edit', $see->id) }}" class="btn btn-warning btn-sm">Edit</a>
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
