@extends('layouts.frontEnd.layout') @section('content') @include('layouts.frontEnd.topheader')




  <section class="banner-bg bg-dark imagebanner">
    <div class="container">
        <div class="row ">
            <div class="col-md-8 text-warning mt-3 mb-10">
              <span class="fs-16 text-warning mb-2" >Home / Services /
                
                {{ $service->utilitytype->name }}
            </div>   
        </div>
    </div>
</section>



<!-- Price  -->
<div class="domain-list-section mt-0 mb-10">
    <div class="stickyrow ">
        <div class="container">
            <div class="sticky-content  mt-n20 ">
                <div class="row  p-0 ">
                    <div class="col-md-8 col-xl-8">
                        <h5 class=" text-dark "> {{$service->name}}</h5>
                    </div>

                    <div class="col-md-4 col-xl-4" style="text-align: right;margin:auto">
                        @if($utilitytypes->firstWhere('id', $service->category)?->name == 'Pooja')
                            <a href="#PoojaPackage"  class="btn btn-primary btn-arrow btn-lg fs-14 fw-medium rounded">
                                <span class="btn-arrow__text">
                                    View Puja Package
                                    <span class="btn-arrow__icon">
                                        <i class="las la-arrow-right"></i>
                                    </span>
                                </span>
                            </a>
                            @endif
                            @if($utilitytypes->firstWhere('id', $service->category)?->name == 'Chadawa')
                            <a data-bs-toggle="modal" data-bs-target="#booknow"   class="btn btn-primary btn-arrow btn-lg fs-14 fw-medium rounded">
                                <span class="btn-arrow__text">
                                    Book Now
                                    <span class="btn-arrow__icon">
                                        <i class="las la-arrow-right"></i>
                                    </span>
                                </span>
                            </a>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card  border-0 rounded h-100 shadow-sm">
            <div class="card-body  p-5 ">
                <div class="row align-items-lg-center  ">
                    <div class="col-lg-5 col-xl-5">
                        <!-- <img src="assets/img/blog-img-2.jpg" alt="image" class="img-fluid"> -->
                        <div class="position-relative z-1 ">
                            <div class="swiper hero-7-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{ asset('storage/app/public/images/' . $service->path) }}" alt="image" class="img-fluid">
                                    </div>                                   

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-7">
                            <small class="d-inline-block mb-2 fw-bold">
                                🔥 Month Special Pooja: <span class="text-warning fw-semibold">+20k Devotee</span>
                            </small>
                            <h6 class="ff-sg mb-2 mt-2">{{$service->name}}</h6>
                            {{-- <p class="text-black mb-0">Starting at: <span class="text-danger fw-semibold">
                              @if ($service->offprice)<del class="fw-bold text-body">
                              Rs.{{$service->offprice}}</del> @endif
                              Rs.{{$service->price}}</span>
                            </p> --}}

                            <p class="mb-6 fw-medium mt-2">
                                {!! $service->hero !!}

                            </p>

                            @if($utilitytypes->firstWhere('id', $service->category)?->name == 'Pooja')
                            <a href="#PoojaPackage"  class="btn btn-primary btn-arrow btn-lg fs-14 fw-medium rounded">
                                <span class="btn-arrow__text">
                                    View Puja Package
                                    <span class="btn-arrow__icon">
                                        <i class="las la-arrow-right"></i>
                                    </span>
                                </span>
                            </a>
                            @endif
                            @if($utilitytypes->firstWhere('id', $service->category)?->name == 'Chadawa')
                            <a data-bs-toggle="modal" data-bs-target="#booknow"   class="btn btn-primary btn-arrow btn-lg fs-14 fw-medium rounded">
                                <span class="btn-arrow__text">
                                    Book Now
                                    <span class="btn-arrow__icon">
                                        <i class="las la-arrow-right"></i>
                                    </span>
                                </span>
                            </a>
                            @endif
                    </div>

                </div>

                <div class="row mt-15">
                    <div class="col-12">
                        <div class="pricing-nav-pills pricing-nav-pills--danger d-block mx-auto border-bottom border-light-subtle sal-animate" >
                            <ul class="nav nav-pills" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="partner-tab-nev d-inline-block text-decoration-none text-dark-emphasis fw-bold px-3 pb-2 active" href="#" data-bs-toggle="pill" data-bs-target="#details" aria-selected="false" role="tab" tabindex="-1">
                                        Descriptions
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="partner-tab-nev d-inline-block text-decoration-none text-dark-emphasis fw-bold px-3 pb-2 " href="#" data-bs-toggle="pill" data-bs-target="#benefits" aria-selected="true" role="tab">
                                        Benefits
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="partner-tab-nev d-inline-block text-decoration-none text-dark-emphasis fw-bold px-3 pb-2" href="#" data-bs-toggle="pill" data-bs-target="#significance" aria-selected="false" role="tab" tabindex="-1">
                                        Purpose and Significance:
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-11">

                            <div class="tab-content sal-animate" data-sal="fade" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                                <div class="tab-pane fade active show" id="details" role="tabpanel">
                                    <p>
                                      {!! $service->detail !!}                                     
                                    </p>
                                    <h6 class="mt-4">Benefits</h6>

                                    @if(!empty($service->benefit) && is_iterable($service->benefit))
                                        <ul class="list-unstyled d-flex flex-column gap-1 mb-0">                                        
                                            @foreach($service->benefit as $benefit)
                                                @if(!empty($benefit['title']))
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                                            <i class="las la-check"></i>
                                                        </div>
                                                        {{ $benefit['title'] }}
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    @else
                                        <p></p>
                                    @endif
                                       


                                    @if($service->purpose)
                                        <h6 class="mt-4">Purpose</h6>
                                        {!! $service->purpose !!}
                                    @endif
                                </div>
                                <div class="tab-pane fade " id="benefits" role="tabpanel">
                                   @if(!empty($service->benefit) && is_iterable($service->benefit))
                                        <ul class="list-unstyled d-flex flex-column gap-1 mb-0">                                        
                                            @foreach($service->benefit as $benefit)
                                                @if(!empty($benefit['title']))
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                                            <i class="las la-check"></i>
                                                        </div>
                                                        {{ $benefit['title'] }}
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    @else
                                        <p></p>
                                    @endif

                                </div>
                                <div class="tab-pane fade" id="significance" role="tabpanel">
                                    <p>  {!! $service->purpose !!} </p>
                                </div>
                            </div>



                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    {{-- available pooja services --}}
    @if($utilitytypes->firstWhere('id', $service->category)?->name == 'Pooja')
    @if(!empty($service->unitprice) && is_iterable($service->unitprice))
    <section class="pt-15 pb-15  gradient-bg-2 position-relative z-1 mt-15" id ="PoojaPackage" style="background-image: url({{ asset('frontEnd/img/shape/bgs.png') }});" >
         <img src="{{ asset('frontEnd/img/shape/isometric-shape-1.png') }}" alt="image" class="img-fluid position-absolute bottom-0 end-0 z-n1 opacity-75 d-none d-sm-block">
        <img src="{{ asset('frontEnd/img/shape/isometric-shape-3.png') }}" alt="image" class="img-fluid position-absolute top-0 start-50 z-n1 opacity-75 d-none d-sm-block">
        <div class="pb-40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                        <div class="text-center sal-animate" >
                            <h2 class="h3 text-dark mb-0">Select {{ $utilitytypes->firstWhere('id', $service->category)?->name }} Package </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">                
                @foreach($service->unitprice as $unitprice)
                    @php
                        $matchedPackage = $packagesName[$unitprice['title']] ?? null;
                    @endphp
                    @if($matchedPackage)
                    <div class="col-xl-4 col-md-4 sal-animate mb-2 mt-2" >
                        <div class="card rounded transition h-100 border border-warning pb-2">
                            <div class="card-body p-2 gradient-bg-2">
                                <div class="hstack gap-1 ">
                                    <span class="d-inline-block flex-shrink-0">
                                        <img src="{{ asset('storage/app/public/images/' . $matchedPackage->path) }}" alt="image" class="img-fluid w-20" style="width: 95px;">
                                    </span>
                                    <div>
                                        <h6 class="mb-0 mt-4 flex-grow-1">{{ $unitprice['title'] }}</h6>
                                        
                                        <p class="fs-14 fw-bolder text-muted mb-0">Package for {{ $matchedPackage->member }} member(s)</p>
                                        <h5 class="mb-0 mt-0 flex-grow-1">Rs.{{ $unitprice['price'] }}</h5>


                                    </div>
                                </div>
                                <div class="monthly-price">
                                    <a href="#" 
                                    class="btn btn-primary btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-2 book-pooja-btn" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#booknow" 
                                    data-package="{{ $unitprice['title'] }}">
                                    <!-- button content -->Book Now
                                    </a>

                                </div>

                                <div class="mt-6">
                                    <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                                        @if(!empty($matchedPackage->point) && is_iterable($matchedPackage->point))
                                            @foreach($matchedPackage->point as $point)
                                                <li class="d-flex align-items-center gap-3">
                                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                                        <i class="las la-check"></i>
                                                    </div>
                                                    <p>{{ $point['title'] }}</p>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    @else
    @endif


    @endif
    {{-- available chadawa services --}}
    @if($service->utilitytype->name  == 'Chadawa') 

    <section class="pt-15 pb-15  gradient-bg-2 position-relative z-1 mt-15" style="background-image: url({{ asset('frontEnd/img/shape/bgs.png') }});" >
         <img src="{{ asset('frontEnd/img/shape/isometric-shape-1.png') }}" alt="image" class="img-fluid position-absolute bottom-0 end-0 z-n1 opacity-75 d-none d-sm-block">
        <img src="{{ asset('frontEnd/img/shape/isometric-shape-3.png') }}" alt="image" class="img-fluid position-absolute top-0 start-50 z-n1 opacity-75 d-none d-sm-block">
        <div class="pb-40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                        <div class="text-center sal-animate" >
                            <h2 class="h3 text-dark mb-0">Available Offerings </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center"> 
                @php
                    $offerings = is_string($service->offerings)
                        ? json_decode($service->offerings, true)
                        : ($service->offerings ?? []);
                @endphp

                @foreach($offerings as $offering)
                    @php
                        $matchedOffering = $offeringsData[$offering] ?? null;
                    @endphp

                    @if($matchedOffering)
                        <div class="col-xl-4 col-md-4 sal-animate mb-4">
                            <div class="card rounded transition border border-warning">
                                <div class="card-body p-2 rounded gradient-bg-2">
                                    <div class="hstack gap-1">
                                        <span class="d-inline-block flex-shrink-0 me-3">
                                            <img src="{{ asset('storage/app/public/images/' . $matchedOffering->path) }}" alt="image" class="img-fluid w-20" style="width: 85px;">
                                        </span>
                                        <div>
                                            <h6 class="mb-0 mt-0 flex-grow-1">{{ $matchedOffering->name }}</h6>
                                            <p class="mb-0 mt-0 flex-grow-1 fs-600">
                                                Rs.{{ number_format($matchedOffering->price ?? 0) }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>
    </section>
    @endif
    {{-- available chadawa services --}}

<!-- /Price  -->
<!-- Modal -->
<div class="modal fade" id="booknow" tabindex="-1" aria-labelledby="enquireModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md">
    <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="float:right"></button>

            <h5> Enquiry Form </h5>
            <form action="{{ route('complaints.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-1">
                <div class="col-12">
                    <label class="form-label fs-14">Enquiry For *</label>
                    <input type="text"  name="subject" value=" {{$service->name}}" class="form-control" readonly>


                </div>
                <div class="col-md-12">
                    <label class="form-label fs-14">Name *</label>
                    <input type="text" name="name" class="form-control" placeholder="Your Full Name" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fs-14">Phone *</label>
                    <input type="text" name="phone" class="form-control" placeholder="Your Contact No." required>
                </div>
                
                <div class="col-md-6">
                    <label class="form-label fs-14">Email *</label>
                    <input type="text" name="email" class="form-control" placeholder="Email Address" required>

                </div>
                <div class="col-md-6">
                    <input type="hidden"   id="modalPackageInput" name="package" class="form-control" placeholder="Package" required>
                    <input type="hidden"   name="category" class="form-control" placeholder="Your Full Name"  value=" @foreach ($utilitytypes as $utilitytype) @if ($service->category == $utilitytype->id) {{ $utilitytype->name }}  @endif @endforeach">

                </div>
               
                <div class="col-12">
                    <label for="messages" class="form-label fs-14">Messages (Upto 250 Words) If any</label>
                    <textarea name="detail" class="form-control" id="" cols="10" rows="2" placeholder="Write your message here.."></textarea>
                </div>
                
                <div class="col-12">
                    <button type="submit" href="#" class="btn btn-danger btn-arrow btn-arrow-md btn-lg fs-14 fw-medium rounded">
                        <span class="btn-arrow__text">
                            Submit
                            <span class="btn-arrow__icon">
                                <i class="las la-arrow-right"></i>
                            </span>
                        </span>
                    </button>
                    <span class="d-block fs-14 mt-4 fw-medium">
                        * By submitting information, you accept our Terms & Conditions
                    </span>
                </div>
                </div>
                </form>
            </div>      
        </div>
  </div>
</div>

<!-- Pooja -->
<section class=" pt-15">
    <div class="pb-40">
        <div class="container">
            <div class="row g-4 ">
                <div class="col-md-6">
                    <div class=" sal-animate" >
                        <h4 class="mb-4 ">
                            Related @foreach ($utilitytypes as $utilitytype) @if ($service->category == $utilitytype->id) {{ $utilitytype->name }}  @endif @endforeach Activity
                        </h4>

                    </div>
                </div>
            </div>
            <div class="row g-4">
                @foreach($services as $service)
                <div class="col-md-4 col-lg-4 sal-animate" >
                    <div class="card rounded-3 h-100 pooja-card">
                        <div class="card-header pt-4 border-bottom-0">
                            <a href="{{ route('service.show', [$service->utilitytype->slug, $service->slug]) }}" class="d-block text-decoration-none">
                                <div class="list-thumb-lg">
                                    <img src="{{ asset('storage/app/public/images/' . $service->path) }}" alt="image" class="img-fluid w-100 cropped-image">
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="product-info">

                            <h6 class="mb-2">
                                <a href="{{ route('service.show', [$service->utilitytype->slug, $service->slug]) }}" class="text-decoration-none hover:text-primary">{{ $service->name }}</a>
                               
                            </h6>

                           <div class="details">
                                         {!! $service->detail !!}   
                                         </div>   
                                        {{-- <p class="text-black mb-0">Starting at: <span class="text-danger fw-semibold">
                                        @if ($utility->offprice)<del class="fw-bold text-body">
                                        Rs.{{$utility->offprice}}</del> @endif
                                        Rs.{{$utility->price}}</span>
                                        </p> --}}
                        </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>



        </div>
    </div>

</section>




<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Attach listener to all Book Pooja buttons (in case you have multiple)
        document.querySelectorAll('.book-pooja-btn').forEach(function(button) {
            button.addEventListener('click', function () {
                // Get package title from the clicked button's data attribute
                const packageTitle = this.getAttribute('data-package');

                // Set the package title inside the modal input field
                const modal = document.getElementById('booknow');
                modal.querySelector('#modalPackageInput').value = packageTitle;

                // If you have other inputs to prefill, do it here similarly
                // e.g. modal.querySelector('input[name="name"]').value = someValue;
            });
        });
    });

</script>


@include('layouts.frontEnd.footer') @endsection