@extends('layouts.superAdmin.layout')

@section('content')
    @include('layouts.superAdmin.header')
    <div class="main main-app p-3 p-lg-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <ol class="breadcrumb fs-sm mb-1">
                    <li class="breadcrumb-item"><a href="/dashboards">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/grievances">Enquiries</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$grievance->name}}</li>
                </ol>
                <h4 class="main-title mb-0">Enquiries</h4>
            </div>
            <nav class="nav nav-icon nav-icon-lg">

            </nav>
        </div>

        <div class="row g-3 justify-content-center">
            <div class="card card-one mt-3">
                <div class="card-header">
                    <h6 class="card-title">View Enquiries</h6>
                    <nav class="nav nav-icon nav-icon-sm ms-auto">
                        <a href="{{ route('grievances.index')}}" class="btn btn-primary btn-icons"><i class="ri-arrow-left-line me-2"></i> Back</a>

                    </nav>
                </div>
                <div class="card-body p-3">
                    
                      <div class="mt-3 fs-15">
                        <p class="fs-15 mb-0"><strong>Date: </strong>{{$grievance->created_at}}</p>
                        <p class="fs-15 mb-0"><strong>Full Name : </strong>{{$grievance->name}}</p>
                        <p class="fs-15 mb-0"><strong>Email : </strong>{{$grievance->email}}</p>
                        <p class="fs-15 mb-0"><strong>Phone : </strong>{{$grievance->phone}}</p>
                         @if($grievance->address)
                        <p class="fs-15 mb-0"><strong>Location : </strong>{{$grievance->address}}</p>
                        @endif
                        <hr>
                        <p class="fs-15 mb-0"><strong>Category : </strong>{{$grievance->category}}</p>
                        <p class="fs-15 mb-0"><strong>Service : </strong>{{$grievance->subject}}</p>
                        @if($grievance->unit)
                        <p class="fs-15 mb-0"><strong>Unit : </strong>{{$grievance->unit}}</p>
                        @endif
                        @if($grievance->package)
                        <p class="fs-15 mb-0"><strong>Package : </strong>{{$grievance->package}}</p>
                        @endif
                        @if($grievance->quantity)
                        <p class="fs-15 mb-0"><strong>Quantity : </strong>{{$grievance->quantity}}</p>
                        @endif
                        <p class="fs-15 mb-0"><strong>Details : </strong>{!! $grievance->detail !!}</p>


                       
                      </div>
                </div><!-- card-body -->
            </div><!-- card -->

        </div><!-- row -->
        @include('layouts.superAdmin.footer')

    @endsection
