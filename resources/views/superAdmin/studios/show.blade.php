@extends('layouts.superAdmin.layout')

@section('content')
    @include('layouts.superAdmin.header')
    <div class="main main-app p-3 p-lg-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <ol class="breadcrumb fs-sm mb-1">
                    <li class="breadcrumb-item"><a href="/dashboards">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/studios">Gallery</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$studio->name}}</li>
                </ol>
                <h4 class="main-title mb-0">Gallery</h4>
            </div>
            <nav class="nav nav-icon nav-icon-lg">

            </nav>
        </div>

        <div class="row g-3 justify-content-center">
            <div class="card card-one mt-3">
                <div class="card-header">
                    <h6 class="card-title">View Gallery List</h6>
                    <nav class="nav nav-icon nav-icon-sm ms-auto">
                        <a href="{{ route('studios.index')}}" class="btn btn-primary btn-icons"><i class="ri-arrow-left-line me-2"></i> Back</a>

                    </nav>
                </div>
                <div class="card-body p-3">
                    <div class="video-headline">
                        <img src="{{ asset('storage/images/' . $studio->path) }}" alt="...">
                       
                      </div>
                      <div class="mt-3">
                        <h5 class="card-title">{{$studio->name}}</h5>
                        <p class="d-flex gap-3 fs-sm text-secondary"><span>{{$studio->created_at}}</span><span>3 months ago</span></p>
                        @if ($studio->image)
                        <div class="form-group mt-3">
                            <label>Current Images</label>
                            <div class="row mt-3">
                                @foreach (json_decode($studio->image) as $image)
                    
                                <div class="col-md-3">
                                    <div class="music-item">
                                      <a href="#" class="music-thumb mb-3"><img src="{{ asset('storage/images/' . $image) }}" alt="" class="img-fluid"></a>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="delete_images[]" value="{{ $image }}" id="delete_{{ $image }}">
                                        <label class="form-check-label" for="delete_{{ $image }}">
                                            Delete
                                        </label>
                                    </div>
                                    </div><!-- music-item -->
                                  </div>
                                    
                                @endforeach
                            </div>
                        </div>
                    @endif
                      </div>
                </div><!-- card-body -->
            </div><!-- card -->

        </div><!-- row -->
        @include('layouts.superAdmin.footer')

    @endsection
