@extends('layouts.frontEnd.layout')
@section('content')
    @include('layouts.frontEnd.header')
    <!-- Breadcrumb -->
    <section class="bg-primary pt-120">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8">
                    <div class="text-start">
                        <span class="fs-16 text-danger mb-2" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300"
                            data-sal-easing="ease-in-out-sine">Home / Success Gallery</span>
                        <p class="mt-5 mb-0">
                            <span class="hero-pre-title-wrap fw-bold text-white"> Success Stories</span>
                        </p>
                        <h1 class="text-white mb-3 h3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300"
                            data-sal-easing="ease-in-out-sine">
                            Meet Our Student . </br>Discover Their Success Stories
                        </h1>

                    </div>
                    <div class="d-flex flex-wrap align-items-center mt-10 gap-4">
                        <a href="#explore" class="btn btn-light btn-arrow btn-lg fs-14 fw-medium rounded">
                            <span class="btn-arrow__text"> Explore <span class="btn-arrow__icon">
                                    <i class="las la-arrow-right"></i>
                                </span>
                            </span>
                        </a>

                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="/public/frontEnd/img/shape/faq.png" alt="image" class="img-fluid w-100 rounded ">
                </div>
            </div>
        </div>
    </section>
    <!-- /Breadcrumb -->


    <section class="bg-primary-2  pt-60 pb-60" id="explore">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6 col-xxl-4">
                    @foreach ($successes as $success)
                         <div class="card rounded-4">
                  <div class="card-body text-center px-8 py-10">
                    <div class="feedback-3-slider__avatar w-18 h-18 rounded-circle overflow-hidden mb-3 mx-auto">
                      <img src="{{ asset('storage/images/' . $success->path) }}" alt="image" class=" h-100 object-fit-cover">
                    </div>
                    <h6 class="mb-2 fs-16"> {{$success->name}} </h6>
                    
                    <h6 class="mb-2 fs-14"> {{$success->designation}}  </h6>
                    <div class="mb-0 fs-14 text-danger">@ {{$success->company}} </div>
                    <h6 class="mb-2 fs-16 mt-4"> College/Institution </h6>
                     <h6 class="mb-2 fs-14 fw-normal"> {{$success->institute}}  </h6>
                  </div>
                </div>
                    @endforeach



                </div>
            </div>

        </div>
    </section>

    @include('layouts.frontEnd.footer')
@endsection
