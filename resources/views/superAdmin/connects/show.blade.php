@extends('layouts.superAdmin.layout')

@section('content')
    @include('layouts.superAdmin.header')
    <div class="main main-app p-3 p-lg-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <ol class="breadcrumb fs-sm mb-1">
                    <li class="breadcrumb-item"><a href="/dashboards">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/utilities">Contac</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$connect->name}}</li>
                </ol>
                <h4 class="main-title mb-0">Contact</h4>
            </div>
            <nav class="nav nav-icon nav-icon-lg">

            </nav>
        </div>

        <div class="row g-3 justify-content-center">
            <div class="card card-one mt-3">
                <div class="card-header">
                    <h6 class="card-title">View Contact</h6>
                    <nav class="nav nav-icon nav-icon-sm ms-auto">
                        <a href="{{ route('utilities.index')}}" class="btn btn-primary btn-icons"><i class="ri-arrow-left-line me-2"></i> Back</a>

                    </nav>
                </div>
                <div class="card-body p-3">
                   <div class="mt-3 fs-15">
                        <p class="fs-15 mb-0"><strong>Date: </strong>{{$connect->created_at}}</p>
                        <p class="fs-15 mb-0"><strong>Full Name : </strong>{{$connect->name}}</p>
                        <p class="fs-15 mb-0"><strong>Phone: </strong>{{$connect->phone}}</p>
                        <p class="fs-15 mb-0"><strong>Email : </strong>{{$connect->email}}</p>
                        <p class="fs-15 mb-0"><strong>Subject : </strong>{{$connect->suburb}}</p>
                        <p class="fs-15 mb-0"><strong>Deatils : </strong>{{$connect->detail}}</p>

                   </div>                      
                </div>
            </div><!-- card -->

        </div><!-- row -->
        @include('layouts.superAdmin.footer')

    @endsection
