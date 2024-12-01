@extends('layouts-frontend/index');
@section('content-frontend')
    <section class="py-5">
        <div class="container px-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Your Extra</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    @foreach ($extra as $see)
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">{{ $see->showextra->name }}</h2>
                                        <p class="text-secondary-emphasis">{{ $see->showextra->description }}</p>
                                        <a href="{{ route('extra-detail.index', $see->showextra->id) }}" class="btn btn-primary btn-md">Look Member</a>
                                    </div>
                                    <img class="img-fluid" src="{{ asset('uploads/logo/' . $see->showextra->logo) }}" class="img-fluid" alt="..." />
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
