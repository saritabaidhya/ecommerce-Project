@extends('layouts.frontEnd.layout') 
@section('content')
@include('layouts.frontEnd.header')
 <!-- Breadcrumb -->
  <section class="banner-bg bg-dark imagebanner">
    <div class="container">
        <div class="row ">
            <div class="col-md-8 text-white mt-3">
                <span class="fs-16 text-white mb-2" >Home / Categories / Astrology</span>

                <h4 class="fs-28 fw-bold text-warning mb-2" >Astrology
                </h4>
            </div>
        </div>
    </div>
  </section>
<!-- /Breadcrumb -->


<section class=" pt-120 pb-60">
    <div class="container">     
 
          <div class="row">
            @foreach($astrologyservices as $astroservice)
            <div class="col-xl-6 col-md-6 sal-animate mb-3 mt-2 p-2" >
                <div class="card rounded transition border border-warning rounded">
                    <div class="card-body rounded p-2 gradient-bg-2 s">
                        <div class="row align-items-center list-astrology-block">
                            <div class="col-md-4 list-astrology-lg position-relative">
                                <img src="{{ asset('storage/images/' . $astroservice->path) }}" alt="{{ $astroservice->name }} image" class="img-fluid w-100 cropped-image">
                                <div class="team__social position-absolute end-3 top-3">
                                    <button type="button" class="team__btn-expand">
                                       {{ $astroservice->experience }}y+
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-8 ps-5">
                                <h5 class="fs-20 mt-4 mb-0">{{ $astroservice->name }}</h5>
                                <p class="details">{{ strip_tags($astroservice->detail) }}</p>
                                <div class="d-flex flex-wrap align-items-center gap-2 mb-2">
                            <a href="{{ route('astrologyservices.show', $astroservice->slug) }}" class="btn btn-primary">More Details</a>


                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        @endforeach
      </div>
    </div>
  </section>

@include('layouts.frontEnd.footer')

@endsection