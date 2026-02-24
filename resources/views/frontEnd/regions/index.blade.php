@extends('layouts.frontEnd.layout') 
@section('content')
@include('layouts.frontEnd.header')
 <!-- Hero -->
    <section class="bg-primary-2 pt-60 pb-60">
        <div class="">
            <div class="about-banner bg-dark pt-20 pb-80 px-2" style="background: url('{{ asset('public/frontEnd/img/1342.jpg') }}') center center / cover no-repeat;">
                 <div class="container">
                 <div class="row align-items-center g-4">
                <div class="col-xl-7">
                    <div class="pb-40">
                         <span class="fs-14 text-primary mb-2" data-sal="slide-up" data-sal-duration="1000"
                            data-sal-delay="300" data-sal-easing="ease-in-out-sine">Home / Region</span>
                 <h1 class="text-white mb-3" >Region</h1>

                    </div>
                </div>
               
            </div>
            </div>
            </div>
        </div>
    </section>
    <!-- /Hero -->

    <!-- Trending Services -->
    <section class="pb-30 pb30-md">
      <div class="container">
        

            <div class="row">
                 @foreach($areas as $area)
                 
              <div class="col-md-3">
                  <div class="card rounded-3">
                        <div class="card-header pt-4 border-bottom-0">
                            <a href="{{ route('region.show',$area->slug) }}" class="d-block text-decoration-none">
                                <img src="{{ asset('storage/images/' . $area->path) }}" alt="image" class="img-fluid w-100">
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="hstack gap-1 align-items-center mb-2">
                                <span class="d-block flex-shrink-0 fs-18">
                                    <i class="las la-hammer"></i>
                                </span>
                                <span class="d-block fs-14">
                                    {{ $area->utilitytypes_count }} Category
                                </span>
                            </div>
                            <h6 class="mb-4">
                                <a href="{{ route('region.show',$area->slug) }}" class="text-decoration-none text-dark hover:text-primary">
                                   {{ $area->name}}
                                </a>
                            </h6>
                            <p class="mb-0 tt-line-clamp tt-clamp-2">
                                With over two decades of experience in high secure web hosting journey.
                            </p>
                            <h6 class="fs-14 fw-normal mb-0 mt-3"><a href="{{ route('region.show',$area->slug) }}"> <span class="text-primary fw-bold ">View List </a></span>
                            </h6>
                        </div>
                    </div>
              </div>
               @endforeach
              </div>
           
          </div>

    </section>
@include('layouts.frontEnd.footer')

@endsection