@extends('layouts.index')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Data Ekstra</h1>
                    <a href="{{ route('extra.create') }}" class="btn btn-primary">Tambah</a>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Ekstra</th>
                                    <th>Hari</th>
                                    <th>Deskripsi</th>
                                    <th>Logo</th>
                                    <th>Aksi</th>
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
                                                <button class="btn btn-danger btn-sm">Hapus</button>
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
