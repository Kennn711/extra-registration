@extends('layouts-frontend.index')
@section('content-frontend')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="justify-content-center align-items-center">
                    <h1>Form Apply Extracullicular</h1>
                </div>

                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('member.store') }}" method="POST">
                            @csrf
                            <label>Extracullicular Leader : </label>
                            <input type="text" value="{{ $data->leader->name }}" disabled readonly class="form-control mb-2">

                            <label>Choosed Extracullicular : </label>
                            <input type="hidden" name="extra_id" value="{{ $data->id }}">
                            <select name="extra_id" class="form-select mb-2">
                                <option value="{{ $data->id }}" selected disabled>{{ $data->name }}</option>
                            </select>

                            <input type="hidden" name="student_id" value="{{ auth()->user()->id }}">

                            <label>Reason want to join this Extracullicular: </label>
                            <input type="name" name="reason" class="form-control mb-2">
                            <button type="submit" class="btn btn-success btn-md">Apply</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
