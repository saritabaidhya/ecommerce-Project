@extends('layouts.frontEnd.layout') 
@section('content')
@include('layouts.frontEnd.header')





  <section class="banner-bg bg-dark imagebanner">
    <div class="container">
        <div class="row ">
            <div class="col-md-8 text-warning mt-3 mb-10">
              <span class="fs-16 text-warning mb-2" >Home / Services /Astrology
                
               
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
                        <h5 class=" text-dark "> {{$astrologyservice->name}}</h5>
                    </div>

                    <div class="col-md-4 col-xl-4" style="text-align: right;margin:auto">
                        <a data-bs-toggle="modal" data-bs-target="#booknow"  class="btn btn-primary btn-arrow btn-lg fs-14 fw-medium rounded d-mb-none">
                            <span class="btn-arrow__text">
                                Enquiry Now
                                <span class="btn-arrow__icon">
                                    <i class="las la-arrow-right"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
      <div class="card  border-0 rounded h-100 shadow-sm">
            <div class="card-body ">
        <div class="row align-items-lg-center justify-content-center">
            <div class="col-lg-4 col-xl-4">
                <div class="border rounded">
                   <img src="{{ asset('storage/images/'.$astrologyservice->path) }}" alt="image" class="img-fluid w-100">
                </div>
            </div>
            <div class="col-lg-7 col-xl-6 ps-10">
                <small class="d-inline-block mb-2 fw-bold">🔥Shree Om Mandir {{ $astrologyservice->designation }} </small>
                <h1> {{$astrologyservice->name}}</h1>
                <p>
                  {!! $astrologyservice->detail !!}
                <ul>
                    <li><strong>Experience:</strong>{{ $astrologyservice->experience }}+ Years </li>
                    <li><strong>Expertise:</strong> {{ $astrologyservice->expertise }}</li>
                    <li><strong>Availability:</strong> {{ $astrologyservice->availability }}</li>
                </ul>


                <div class="d-flex flex-wrap align-items-center gap-4">
                    <a data-bs-toggle="modal" data-bs-target="#booknow" class="btn btn-primary border-0 bg-warning btn-arrow btn-arrow-md fs-14 fw-medium rounded mt-5 ">
                        <span class="btn-arrow__text fw-bold text-black">
                            Enquiry Now
                            <span class="btn-arrow__icon">
                                <i class="las la-arrow-right"></i>
                            </span>
                        </span>
                    </a>

                </div>

            </div>
            </div>
            </div>

        </div>
    </div>
    <img src="{{ asset('frontEnd/img/shape/isometric-shape-1.png') }}" alt="image" class="hero-3__shape hero-3__shape-1 img-fluid">
    <img src="{{ asset('frontEnd/img/shape/isometric-shape-2.png') }}" alt="image" class="hero-3__shape hero-3__shape-2 img-fluid">
    <img src="{{ asset('frontEnd/img/shape/isometric-shape-3.png') }}" alt="image" class="hero-3__shape hero-3__shape-3 img-fluid">
    <img src="{{ asset('frontEnd/img/shape/isometric-shape-1.png') }}" alt="image" class="hero-3__shape hero-3__shape-4 img-fluid">
</div>

@if($availableervices->isNotEmpty())
<section class="pt-15 pb-15  gradient-bg-2 position-relative z-1 mt-15" style="background-image: url(https://staging.thebigsolutions.com/public/frontEnd/img/shape/bgs.png);">
         <img src="https://staging.thebigsolutions.com/public/frontEnd/img/shape/isometric-shape-1.png" alt="image" class="img-fluid position-absolute bottom-0 end-0 z-n1 opacity-75 d-none d-sm-block">
        <img src="https://staging.thebigsolutions.com/public/frontEnd/img/shape/isometric-shape-3.png" alt="image" class="img-fluid position-absolute top-0 start-50 z-n1 opacity-75 d-none d-sm-block">
        <div class="pb-40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                        <div class="text-center sal-animate" >
                            <h2 class="h3 text-dark mb-0">Select Astrology Service </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row ">  
                
                @forelse($availableervices as $utility)
                        <div class="col-md-4 col-lg-4 sal-animate mb-4" >
                            <div class="card rounded-3 h-100 ">
                                <div class="card-header pt-4 border-bottom-0">
                                    <a href="{{ route('service.show', [$utility->utilitytype->slug, $utility->slug]) }}" class="d-block text-decoration-none">
                                        <div class="list-thumb-lg">
                                            <img src="{{ asset('storage/images/' . $utility->path) }}" alt="image" class="img-fluid cropped-image">
                                        </div>
                                    </a>
                                </div>
                                
                                <div class="card-body">
                                    <div class="product-info">
                                    <h6 class="mb-2"> {{ $utility->name }}</h6>
                                    <a href="#" 
                                    class="btn btn-primary btn-arrow  fs-14 fw-bolder rounded mt-2 book-pooja-btn" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#booknow" 
                                    data-package="{{ $utility->name }}">
                                    <!-- button content -->Enquiry Now
                                    </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                @empty
                    <div class="col-12">
                        <p class="text-muted">No services found for the selected filters.</p>
                    </div> 
                @endforelse
            </div>
        </div>
    </section>
@endif



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
                    <input type="text"  name="subject" value=" {{$astrologyservice->name}}" class="form-control" readonly>


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
                    <input type="hidden" id="modalPackageInput" name="package" class="form-control" placeholder="Package" required value="{{ $utility->name ?? '' }}">
                    <input type="hidden"   name="category" class="form-control" 
                    placeholder="Your Full Name"  value="Astrology "> 

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