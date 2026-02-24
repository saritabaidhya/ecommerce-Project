@extends('layouts.frontEnd.layout') 
@section('content')
@include('layouts.frontEnd.header')




<!-- Breadcrumb -->
<section class="banner-bg bg-dark imagebanner">
    <div class="container">
        <div class="row">
            <div class="col-xxl-7 col-lg-7 text-white">
                <h4 class="fs-28 fw-bold text-warning mb-2" >About Us
                </h4>
                 {!!$abouts->first()->detail!!}
                </nav>
            </div>

            <div class="col-xl-4">
                <!-- <div class="about-banner__img">
                    <img src="assets/img/47797.jpg" alt="image" class="img-fluid">
                </div> -->
            </div>
        </div>
    </div>
</section>
<!-- /Breadcrumb -->


<section class="bg-warning-2 pt-15 pb-15">
    <div class="container">
        <div class="row g-4 align-items-center">
             @foreach ($appsteps as $appstep)   
                <div class="col-xl-5">
                    <img src="{{ asset('storage/images/'. $appstep->path) }}" alt="image" class="img-fluid rounded-3">
                </div>
                <div class="col-xl-7">
                    <h3 class="fs-36 mb-4">{{ $appstep->name }}
                    </h3>
                    <ul class="list-unstyled p-0 m-0 fs-16">
                        @foreach($appstep->point as $point) 
                        <li class="d-flex align-items-start gap-2 mb-2 ">
                            <div class="w-9 h-6 d-grid place-content-center bg-warning-2 fs-24 text-warning fw-bold flex-shrink-0"><i class="las la-arrow-right"></i></div>
                            <span class="d-block">
                                {{ $point['title'] }}
                            </span>
                        </li>
                        @endforeach
                    </ul>

                    <a href="/contacts" class="btn btn-primary border-0 bg-warning btn-arrow btn-arrow-md fs-14 fw-medium rounded mt-5">
                        <span class="btn-arrow__text fw-bold text-black">
                            Enquiry Now
                            <span class="btn-arrow__icon">
                                <i class="las la-arrow-right"></i>
                            </span>
                        </span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    </div>
</section>


<!-- what makes diiferent -->
<section class=" pt-15 pb-15">
    <div class="container">
        <div class="row g-4 justify-content-center ">
            <div class="col-md-12">
                <div class="text-center sal-animate" >
                    <h2 class="mb-4 ">
                        Why Choose Us?
                    </h2>
                    <p class="mb-4 max-text-60 mx-auto">
                        Our fantastic IT team has created the Shree Om Mandir App, keeping a better customer experience in mind. The smooth and reliable platform works simply:</p>
                </div>
            </div>
        </div>

        <div class="row g-4">
          @foreach($features as $feature)
            <div class="col-sm-6 col-lg-3 sal-animate" >
                <div class="price-card-item-one shadow-sm position-relative bg-white px-7 py-9 text-center rounded h-100">
                    <div class="mb-2">
                        <img src="{{ asset('storage/images/'. $feature->path) }}" alt="image" class="img-fluid w-20">
                    </div>
                    <h6> {{ $feature->name }}</h6>
                    <small class="d-block mb-2">
                      {!! $feature->detail !!}
                    </small>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>




    
@include('layouts.frontEnd.footer')

@endsection