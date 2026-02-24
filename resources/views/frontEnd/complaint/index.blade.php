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
                            data-sal-delay="300" data-sal-easing="ease-in-out-sine">Home / Complaints</span>
                 <h1 class="text-white mb-3" >Complaints</h1>

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
            
            <div class="row align-items-center justify-content-between g-4">
                <div class="col-xl-6">
                                      <div class="card border-0 rounded-4">
                        <div class="card-body pt-40 pb-40 px-md-12">
                            <div class="row">
                                <div class="col-md-12 col-xl-12">
                                    <div class="overflow-hidden mb-6">
                                        <h5 class="mb-0 d-inline-block flush-subtitle">
                                          Your Feedback is Appreciated
                                        </h5>
                                    </div>
                                    <form action="{{ route('complaints.store') }}" method="POST" enctype="multipart/form-data">
                                      @csrf
                                   <div class="row g-3">
                                            <div class="col-12">
                                                <label  class="form-label fs-14">Business Name *</label>
                                                <input type="text" name="business" class="form-control"  placeholder="Your Complaint For" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label fs-14">Name</label>
                                                <input type="text" name="name" class="form-control"  placeholder="Your Full Name" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label fs-14">Phone</label>
                                                <input type="text" name="phone" class="form-control" placeholder="Your Contact No." required>
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label fs-14">Date</label>
                                                <input type="date" name="date" class="form-control"   required>
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label fs-14">Problem Occured</label>
                                                <input type="text" name="subject" class="form-control"  placeholder="Issues List" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label fs-14">Types Of Services</label>
                                                <input type="text" name="service" class="form-control"  placeholder="Service you had" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label fs-14">Payment</label>
                                              <input type="text" name="payment" class="form-control"  placeholder="Invoice or Cash" required>

                                            </div>
                                            <div class="col-12">
                                                <label for="messages" class="form-label fs-14">Messages (Upto 250 Words)</label>
                                                <textarea name="detail" class="form-control" id="" cols="10" rows="2" placeholder="Write your message here.."></textarea>
                                            </div>
                                            <div class="col-12">
                                                <label for="messages" class="form-label fs-14">Attach Image File (If Any) </label>
                                                <input type="file" name="image" class="form-control" >

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
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-5">
                    <h3 class="fs-36 mb-4">Keep In Touch With Us.</h3>
                    <p class="mb-8">Whether you have questions or you would just like to say hello, contact us.</p>
                    <div class="d-flex flex-column gap-5">
                        <div>
                            <h6 class="d-flex align-items-center gap-2 mb-3">
                                Address
                            </h6>
                            <p class="mb-0">{{$settings->first()->address}}</p>
                        </div>
                        <div>
                            <h6 class="d-flex align-items-center gap-2 mb-3">
                                Email
                            </h6>
                            <p class="mb-0">{{$settings->first()->email}}</p>
                        </div>
                        <div>
                            <h6 class="d-flex align-items-center gap-2 mb-3">
                                Phone
                            </h6>
                            <p class="mb-0">{{$settings->first()->phone}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
@include('layouts.frontEnd.footer')

@endsection