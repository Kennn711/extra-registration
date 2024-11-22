@extends('layouts-backend.index')
@section('page-title', 'Dashboard Leader')
@push('breadcumb-backend')
    <li class="breadcrumb-item text-capitalize">{{ auth()->user()->name }}</li>
    <li class="breadcrumb-item">Dashboard</li>
@endpush
