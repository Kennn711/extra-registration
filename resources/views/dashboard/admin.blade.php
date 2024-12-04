@extends('layouts-backend.index')
@section('page-title', 'Dashboard Admin')
@push('breadcumb-backend')
    <li class="breadcrumb-item">Admin</li>
    <li class="breadcrumb-item">Dashboard</li>
@endpush

@section('content-backend')
    <div class="page-content">
        <section class="row">
            <!-- Left Section -->
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon purple mb-2">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Extra Leader :</h6>
                                        <h6 class="font-extrabold mb-0">{{ $leader }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon blue mb-2">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Student : </h6>
                                        <h6 class="font-extrabold mb-0">{{ $student }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon green mb-2">
                                            <i class="iconly-boldAdd-User"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Extracullicular : </h6>
                                        <h6 class="font-extrabold mb-0">{{ $extra }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon red mb-2">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Saved Post</h6>
                                        <h6 class="font-extrabold mb-0">112</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Recent Leader</h4>
                    </div>
                    <div class="card-content pb-4">
                        @foreach ($leaderName as $see)
                            <div class="recent-message d-flex px-4 py-3">
                                <div class="avatar avatar-lg">
                                    @if (empty($see->avatar))
                                        <img src="{{ asset('uploads/empty-avatar/empty-avatar.webp') }}">
                                    @else
                                        <img src="{{ asset('uploads/avatar' . $see->avatar) }}">
                                    @endif
                                </div>
                                <div class="name ms-4">
                                    <h5 class="mb-1">{{ $see->name }}</h5>
                                    <h6 class="text-muted mb-0">{{ $see->email }}</h6>
                                </div>
                            </div>
                        @endforeach
                        <div class="px-4">
                            <a href="{{ route('extraleader.index') }}" class='btn btn-block btn-xl btn-outline-primary font-bold mt-3'>See All</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
