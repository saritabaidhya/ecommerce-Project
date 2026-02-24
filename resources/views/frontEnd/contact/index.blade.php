@extends('layouts.frontEnd.layout') 
@section('content')
@include('layouts.frontEnd.header')

 <!-- Breadcrumb -->
<section class="banner-bg bg-dark imagebanner">
    <div class="container">
        <div class="row">
            <div class="col-xxl-7 col-lg-9 text-white">
                <span class="fs-16 text-white mb-2" >Home / Contact Us</span>
                <h4 class="fs-28 fw-bold text-warning mb-2" >Contact Us
                </h4>   
            </div>            
        </div>
    </div>
</section>
<!-- /Breadcrumb -->

<!-- Contact Form -->
<section class="pt-20 pb-20 ">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-7 bg-white p-5 shadow-sm rounded">
                <h2 class="h3 mb-0" data-sal="slide-up" >Get Connected Today</h2>
                <p class="mb-6" data-sal="slide-up" >Your email address will not be published Required fields are marked *</p>
                <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="fullname" class="form-label fs-14">Full Name *</label>
                            <input type="text" name="name" class="form-control" id="fullname" placeholder="Your Full Name" required>
                        </div>
                        <div class="col-6">
                            <label for="phone" class="form-label fs-14">Phone *</label>
                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Contact No." required>
                        </div>
                        <div class="col-6">
                            <label for="email" class="form-label fs-14">Email *</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Your Email Address" required>
                        </div>
                        <div class="col-12">
                            <label for="suburb" class="form-label fs-14">Subject</label>
                            <input type="text" name="suburb" class="form-control" id="suburb" placeholder="Your contact subject " required>
                        </div>
                        
                        <div class="col-12">
                            <label for="messages" class="form-label fs-14">Messages (Upto 250 Words)</label>
                            <textarea name="detail" class="form-control" id="" cols="10" rows="2" placeholder="Write your message here.."></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" href="#" class="btn btn-primary btn-arrow btn-arrow-md btn-lg fs-14 fw-medium rounded">
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
            <div class="col-lg-5 ps-10">
                <h3 class="mb-0 sal-animat0 text-danger">
                    Let's talk with us
                </h3>
                <p>For app inquiries or assistance, contact our customer service at provided email. Connect with us on social media or call for prompt help.
                </p>
                <div class="hstack gap-3 mb-5">
                    <div class="w-12 h-12 d-grid place-content-center rounded-circle bg-warning-subtle mb-2">
                        <img src="{{ asset('frontEnd/img/icons/phone-call.png') }}" alt="image" class="img-fluid w-6">
                    </div>
                    <span class="d-block">
                        <strong>Phone</strong><br>{{$settings->first()->phone}}
                    </span>
                </div>
                <div class="hstack gap-3 mb-5">
                    <div class="w-12 h-12 d-grid place-content-center rounded-circle bg-warning-subtle mb-2">
                        <img src="{{ asset('frontEnd/img/icons/mail.png') }}" alt="image" class="img-fluid w-6">
                    </div>
                    <span class="d-block">
                        <strong>Email</strong><br>{{ $settings->first()->email }}
                    </span>
                </div>

                <div class="hstack gap-3 mb-5">
                    <div class="w-12 h-12 d-grid place-content-center rounded-circle bg-warning-subtle mb-2">
                        <img src="{{ asset('frontEnd/img/icons/placeholder.png') }}" alt="image" class="img-fluid w-6">
                    </div>
                    <span class="d-block">
                        <strong>Address</strong><br>{{ $settings->first()->address }}
                    </span>
                </div>




            </div>
        </div>
    </div>
</section>



@if ($message = Session::get('success'))
<div class="toast-container position-fixed bottom-0 end-0 p-3 z-2" id="toastPlacement">
    <div class="toast">
        <div class="toast-header bg-success">
            <img src="assets/images/logo-sm.png" alt="" height="20" class="me-1">
            <h6 class="me-auto my-0 text-white fs-16">Success!</h6>
            <small class="text-white">0 mins ago</small>
            <button type="button" class="btn-close text-white" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body flex-fill bg-success">
            <p class="text-white">{{ $message }}</p>
        </div>
    </div>
</div>
@endif @if ($message = Session::get('errors'))
<div class="toast-container position-fixed bottom-0 end-0 p-3 z-2" id="toastPlacement">
    <div class="toast">
        <div class="toast-header bg-warning">
            <img src="assets/images/logo-sm.png" alt="" height="20" class="me-1">
            <h6 class="me-auto my-0 fs-16">Whoops! There's a problem</h6>
            <small>0 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body flex-fill bg-warning bg-opacity-75">
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
    </div>
</div>
@endif
    
@include('layouts.frontEnd.footer')

@endsection