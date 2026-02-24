@extends('layouts.frontEnd.layout') 
@section('content')
@include('layouts.frontEnd.header')
 <!-- Breadcrumb -->
 <section class="banner-bg bg-dark">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-8">
              <div class="text-center">
                  <span class="fs-16 text-danger mb-2" >Home / offers / {{$offer->name}}</span>
                  <h1 class="text-white mb-3" >
                    {{$offer->name}}
                  </h1>
                  <p class="text-white mb-0 max-text-60 mx-auto text-opacity-75" >
                      Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat.

                  </p>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- /Breadcrumb -->

<div class="pt-120 pb-60">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-8 col-lg-8">
                <div class="vstack gap-6">
                    <div class="card border-0 shadow-sm rounded-3 h-100" data-sal="fade" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <div class="card-header pt-4 pt-xl-6 px-xl-6 border-bottom-0">
                            <a href="offer-details.html" class="d-block text-decoration-none">
                                <img src="{{ asset('storage/images/' . $offer->path) }}" alt="image" class="img-fluid w-100">
                            </a>
                        </div>
                        <div class="card-body px-xl-6  pb-xl-6">
                            <div class="hstack gap-4 align-items-center mb-2">
                                <div class="hstack gap-1 align-items-center">
                                    <span class="d-block flex-shrink-0 fs-18">
                                        <i class="las la-user"></i>
                                    </span>
                                    <span class="d-block fs-14">
                                       Apex Admin
                                    </span>
                                </div>
                                <div class="hstack gap-1 align-items-center">
                                    <span class="d-block flex-shrink-0 fs-18">
                                        <i class="las la-calendar"></i>
                                                                        </span>
                                    <span class="d-block fs-14">
                                         {{ $offer->created_at->format('d M Y') }}
                                    </span>
                                </div>
                            </div>
                            <h4 class="mb-4">
                                <div class="text-decoration-none tt-line-clamp tt-clamp-2 text-dark hover:text-primary">
                                    {{$offer->name}}
                                </div>
                            </h4>
                            <div class="tt-line-clamp tt-clamp-22 mb-6">
                                {!! $offer->detail!!} 
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="rounded-3 bg-body shadow-sm">
                    
                    <div class="p-4 p-xl-6" data-sal="fade" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <h6 class="widget-title">Recent Post</h6>
                        <ul class="list-unstyled m-0">
                            @foreach ( $offers as $offer)
                            <li>
                                <div class="d-flex align-items-center gap-3 py-4">
                                    <div class="d-inline-block flex-shrink-0 list-thumb">
                                        <img src="{{ asset('storage/images/' . $offer->path) }}" alt="image" class="img-fluid cropped-list-image rounded">
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="d-block fs-12 mb-1">
                                            {{ $offer->created_at->format('d M Y') }}
                                        </span>
                                        <h6 class="mb-0 fw-800">
                                            <a href="{{ route('offer.show',$offer->slug) }}" class="d-block fs-16 text-decoration-none tt-line-clamp tt-clamp-2 text-dark hover:text-primary">
                                                {{ $offer->name}}
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                          
                        </ul>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>   
@include('layouts.frontEnd.footer')

@endsection