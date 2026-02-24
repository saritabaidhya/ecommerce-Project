@extends('layouts.superAdmin.layout')

@section('content')
    @include('layouts.superAdmin.header')
    <div class="main main-app p-3 p-lg-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <ol class="breadcrumb fs-sm mb-1">
                    <li class="breadcrumb-item"><a href="/dashboards">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/utilities">Service Categories</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$utilitytype->name}}</li>
                </ol>
                <h4 class="main-title mb-0">Service Categories</h4>
            </div>
            <nav class="nav nav-icon nav-icon-lg">

            </nav>
        </div>

        <div class="row g-3 justify-content-center">
            <div class="card card-one mt-3">
                <div class="card-header">
                    <h6 class="card-title">View service category</h6>
                    <nav class="nav nav-icon nav-icon-sm ms-auto">
                        <a href="{{ route('utilities.index')}}" class="btn btn-primary btn-icons"><i class="ri-arrow-left-line me-2"></i> Back</a>

                    </nav>
                </div>
                <div class="card-body p-3">
                    <div class="video-headline">
                        <img src="{{ asset('storage/images/' . $utilitytype->path) }}" alt="...">
                       
                      </div>
                      <div class="mt-3">
                        <h5 class="card-title">{{$utilitytype->name}}</h5>
                        <p class="d-flex gap-3 fs-sm text-secondary"><span>{{$utilitytype->created_at}}</span><span>Admin</span></p>
                        {!! $utilitytype->detail !!}
                      </div>
                </div><!-- card-body -->
            </div><!-- card -->

        </div><!-- row -->
        @include('layouts.superAdmin.footer')

    @endsection
