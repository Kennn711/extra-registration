@extends('layouts-frontend/index');
@section('content-frontend')
    <section class="py-5">
        <div class="container px-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Available Extracullicular</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    @foreach ($data as $see)
                        <!-- Project Card 1-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">{{ $see->name }}</h2>
                                        <p class="text-secondary-emphasis">{{ $see->description }}</p>
                                        @php
                                            $alreadyJoin = DB::table('members')
                                                ->where('student_id', Auth::user()->id)
                                                ->where('extra_id', $see->id)
                                                ->where('status', 'accepted')
                                                ->exists();
                                        @endphp

                                        @php
                                            $alreadySubmit = DB::table('members')
                                                ->where('student_id', Auth::user()->id)
                                                ->where('extra_id', $see->id)
                                                ->where('status', 'pending')
                                                ->exists();
                                        @endphp

                                        @if ($alreadyJoin)
                                            <button type="button" disabled class="btn btn-danger btn-md">You already join this Extra !</button>
                                        @endif

                                        @if ($alreadySubmit)
                                            <button type="button" disabled class="btn btn-warning btn-md">You already submit to join this Extra !</button>
                                        @endif

                                        @if (!$alreadyJoin && !$alreadySubmit)
                                            <a href="{{ route('regis.create', $see->id) }}" class="btn btn-success btn-md">Apply</a>
                                        @endif
                                    </div>
                                    <img class="img-fluid" src="{{ asset('uploads/logo/' . $see->logo) }}" class="img-fluid" alt="..." />
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
