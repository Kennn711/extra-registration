@extends('layouts-backend.index')
@section('page-title', 'Leader')

@push('breadcumb-backend')
    <li class="breadcrumb-item">Leader</li>
    <li class="breadcrumb-item">Tables</li>
    <li class="breadcrumb-item">Members</li>
    <li class="breadcrumb-item active">Add Extra Members</li>
@endpush
@section('content-backend')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="justify-content-center align-items-center">
                    <h1>Form Add New Member</h1>
                </div>

                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('member.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label>Choose Student : </label>
                            <select name="student_id" class="form-select mb-2">
                                <option selected disabled>-- None --</option>
                                @foreach ($student as $see)
                                    <option value="{{ $see->id }}">{{ $see->name }}</option>
                                @endforeach
                            </select>

                            <label>Reason : </label>
                            <input type="name" name="reason" class="form-control mb-2">
                            <button class="btn btn-success btn-md">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
