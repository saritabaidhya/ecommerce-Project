@extends('layouts.frontEnd.layout') 
@section('content')
@include('layouts.frontEnd.header')

 <!-- Hero -->
    <section class="bg-primary-2 pt-60 pb-60">
        <div class="">
            <div class="bg-dark pt-80 pb-80 px-2">
                 <div class="container">
                 <div class="row align-items-center g-4">
                <div class="col-xl-7">
                    <div class="pb-40">
                         <span class="fs-14 text-primary mb-2" data-sal="slide-up" data-sal-duration="1000"
                            data-sal-delay="300" data-sal-easing="ease-in-out-sine">Home / Profile / {{$viewProfile->name}}</span>
                 <h1 class="text-white mb-3" >{{$viewProfile->name}}</h1>

                    </div>
                </div>
               
            </div>
            </div>
            </div>
        </div>
    </section>
    <!-- /Hero -->



<section class="pt-60 pb-60 position-relative">
        <div class="container">
            
                                           <div class="row">
                    <div class="col-md-8 mb-4">
                        <div class="px-5 py-8 border rounded-3 position-relative z-1 transition overflow-hidden bg-white">
                            <div class="d-flex align-items-center gap-3 mt-5 mb-3">
                                <img src="{{ asset('storage/images/' . $viewProfile->fav) }}" alt="image" class="img-fluid" />
                                <div>
                                    <h6 class="mb-0">{{$viewProfile->name}} <span class="las la-check-circle text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Verified merchant"></span></h6>
                                    <small class="fw-medium">@foreach ($areas as $area) @if ($viewProfile->suburb == $area->id) {{ $area->name }} @endif @endforeach</small>
                                </div>
                            </div>
                            <small class="fw-bold">{{$viewProfile->address}}</small>
                            <p class="fs-14">{{$viewProfile->hero}}</p>
                            <div class="d-flex align-items-center gap-2 flex-wrap mt-3">
                                <a href="tel:{{$viewProfile->phone}}" class="text-decoration-none px-3 py-1 rounded-pill border text-body fs-14"> <i class="las la-phone"></i> {{$viewProfile->phone}} </a>
                                <a href="mailto:{{$viewProfile->email}}" class="text-decoration-none px-3 py-1 rounded-pill border text-body fs-14"> <i class="las la-envelope"></i> {{$viewProfile->email}} </a>
                                <a href="{{$viewProfile->website}}" class="text-decoration-none px-3 py-1 rounded-pill border text-body fs-14"> <i class="las la-globe"></i> Website </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0">
                            <div class="card-body p-md-7 shadow-sm rounded-3">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-secondary pb-5">
                                    <ul class="list-unstyled p-0 m-0 hstack">
                                        <li>
                                            <span class="d-inline-block text-warning">
                                                <i class="las la-star"></i>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="d-inline-block text-warning">
                                                <i class="las la-star"></i>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="d-inline-block text-warning">
                                                <i class="las la-star"></i>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="d-inline-block text-warning">
                                                <i class="las la-star"></i>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="d-inline-block text-dark text-opacity-25">
                                                <i class="las la-star"></i>
                                            </span>
                                        </li>
                                    </ul>
                                    <span class="fw-bold">5.0 Ratings</span>
                                </div>
                                <p class="mt-3 fw-bold">Verified ABN and Licences</p>
                                <p class="mt-3 fs-14">{{$viewProfile->name}} tradie are member since {{ $viewProfile->created_at->format('M,Y') }}</p>
                                <div class="d-flex align-items-center gap-4 mt-2">
                                    <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-0" href="{{ route('viewProfile.edit',$viewProfile->id) }}">
                                        <span class="btn-arrow__text">
                                            Edit Profile
                                            <span class="btn-arrow__icon">
                                                <i class="las la-arrow-right"></i>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="border-bottom border-light-subtle">
                            <ul class="nav nav-pills justify-content-start" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="d-inline-block text-decoration-none text-dark-emphasis fw-bold px-3 pb-2" href="#detail{{$viewProfile->id}}">
                                        About
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="d-inline-block text-decoration-none text-dark-emphasis fw-bold px-3 pb-2" href="#service{{$viewProfile->id}}">
                                        Services
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="d-inline-block text-decoration-none text-dark-emphasis fw-bold px-3 pb-2" href="#gallery{{$viewProfile->id}}">
                                        Gallery
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="content">
                            <div class="mt-4 p-2" id="detail{{$viewProfile->id}}">
                                <h5>About {{$viewProfile->name}}</h5>
                                {!! $viewProfile->detail !!}
                            </div>

                            <div class="mt-4 p-2" id="service{{$viewProfile->id}}">
                                <h5>{{$viewProfile->name}} Services</h5>
                                <div class="row">
                                    @foreach ($viewProfile->service as $index => $serviceId) @php $matchedUtility = $utilities->firstWhere('id', $serviceId); @endphp @if ($matchedUtility)
                                    <div class="col-md-4 my-3">
                                        
                                        <div class="nav-tab__card border border-dark border-opacity-10 p-3">
                                            <span class="d-flex align-items-center gap-1">
                                            <span class="nav-tab__line flex-shrink-0"></span>
                                        <span
                                                class="d-inline-block fw-medium fs-14 text-primary nav-tab__subtitle">0{{ $loop->iteration }}</span>
                                        </span>
                                        <span class="nav-tab__title d-block fw-semibold h6 fs-14 mb-0">
                                                {{ $matchedUtility->name }}
                                        </span>
                                        </div>
                                    </div>
                                    @endif @endforeach
                                </div>
                            </div>
                            
   <div class="mt-4 p-2" id="gallery{{ $viewProfile->id }}">
    @php
        $imagePaths = json_decode($viewProfile->path, true) ?? [];
    @endphp

    @if (!empty($imagePaths))
        <h5>Gallery</h5>
        <div class="row mt-4">
            {{-- First Image --}}
            <div class="col-md-6">
                <img src="{{ asset('storage/images/' . $imagePaths[0]) }}" alt="Image" class="img-fluid w-100">
            </div>

            {{-- Remaining Images --}}
            <div class="col-md-6">
                <div class="row">
                    @foreach(array_slice($imagePaths, 1) as $image)
                        <div class="col-md-6">
                            <img src="{{ asset('storage/images/' . $image) }}" alt="Image" class="img-fluid mb-4 w-100">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <p>No images available.</p>
    @endif
</div>


                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="map-div">
                            <iframe src="{{$viewProfile->map}}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>


        </div>
    </section>

    
@include('layouts.frontEnd.footer')

@endsection