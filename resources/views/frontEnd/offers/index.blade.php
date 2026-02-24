@extends('layouts.frontEnd.layout') 
@section('content')
@include('layouts.frontEnd.header')
 <!-- Breadcrumb -->
 <section class="banner-bg bg-dark">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-8">
              <div class="text-center">
                  <span class="fs-16 text-danger mb-2" >Home / offers</span>
                  <h1 class="text-white mb-3" >
                     offers
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

    <section class="bg-primary-2  pt-60 pb-60">
      <div class="container">
        
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
                  @foreach($offers as $offer)
              <div class="col-md-3">
                <div class="card rounded-3 h-100">
                  <div class="card-header pt-4 border-bottom-0">
                    <a href="{{ route('offer.show',$offer->slug) }}" class="d-block text-decoration-none">
                      <img src="{{ asset('storage/images/' . $offer->path) }}" alt="image" class="img-fluid ">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between  mb-2">
                      <span class="d-block fs-14">
                        <i class="las la-calendar"></i> {{ $offer->created_at->format('d M Y') }}
                      </div>
                    <h6 class="mb-3">
                      <a href="{{ route('offer.show',$offer->slug) }}" class="text-decoration-none text-dark hover:text-primary"> {{$offer->name}}</a>
                    </h6>
                    <div class="mb-0 tt-line-clamp tt-clamp-2 fs-14"> {!! $offer->detail!!}                    </div>
                    <div class="d-flex align-items-center justify-content-between  mb-2 mt-3">
                      <span class="d-block fs-14 fw-bold"> <a class="text-decoration-none" href="{{ route('offer.show',$offer->slug) }}"> View More <i class="las la-arrow-right"></i> </a>
                      </span>
                    </div>
                  </div>
                </div>
                  
           </div>
               @endforeach
              </div>
           
          </div>
        </div>
      </div>
    </section>

@include('layouts.frontEnd.footer')

@endsection