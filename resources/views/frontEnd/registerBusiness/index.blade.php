@extends('layouts.frontEnd.layout') 
@section('content')
@include('layouts.frontEnd.header')
 <!-- Hero -->
    <section class="bg-primary-2 pt-60 pb-60">
        <div class="px-8">
            <div class="home-9-hero pt-80 pb-80 px-2 rounded-4" style="background-image: url(https://tradiequote.com.au/storage/images/FKk0qCIEYkgT6FAQGQ4QklLt6efPJXPzZTSXcQJe.jpg);">
                <div class="container">
                    <div class="row">
                         <div class="col-lg-6" data-sal="fade" data-sal-duration="1000" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                    <div class="card border-0 rounded-4">
                        <div class="card-body pt-40 pb-40 px-md-12">
                            <div class="row">
                                <div class="col-md-12 col-xl-12">
                                    <div class="overflow-hidden mb-6">
                                        <h5 class="mb-0 d-inline-block flush-subtitle">
                                           List Your Business Today
                                        </h5>
                                    </div>
                                    <form action="{{ route('register-business.store') }}" method="POST" enctype="multipart/form-data">
                                      @csrf
                                   <div class="row g-3">
                                            <div class="col-md-7">
                                                <label for="fullname" class="form-label fs-14">Business Name *</label>
                                             <input type="text" name="name" class="form-control" placeholder="Your Business Name">
                                            </div>
                                             <div class="col-md-5">
                                                <label for="ABN" class="form-label fs-14">ABN No. <span><a href="https://abr.business.gov.au/" target="_blank">(Look Up My ABN)</a></span> </label>
                                             <input type="text" name="abn" class="form-control" maxlength="11" placeholder="Your Business ABN No.">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="phone" class="form-label fs-14">Phone * </label>
                                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Contact No." required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="email" class="form-label fs-14">Email *</label>
                                                <input type="text" name="email" class="form-control" id="email" placeholder="Your Email Address" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="website" class="form-label fs-14">Your Services *</label>
                                               <select id="select2D" class="form-control" name="service[]" multiple>
                                               @foreach ($utilities as $utility)
                                            <option value="{{ $utility->id }}"> {{ $utility->name }}</option>
                                               @endforeach
                                               
                                               <option value="0">Others</option>
                                            </select>
                                            </div>
                                            <div class="col-md-7">
                                                <label for="Liability" class="form-label fs-14">Public Liability </label>
                                                <select class="form-control" name="liability">
                                            <option value="Yes">Yes </option>
                                            <option value="No">No </option>
                                            </select>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="indemnity" class="form-label fs-14">Professional Indemnity </label>
                                                <select class="form-control" name="indemnity">
                                            <option value="Yes">Yes </option>
                                            <option value="No">No </option>
                                            </select>
                                            </div>
                                            <div class="col-md-7">
                                                <label for="suburb" class="form-label fs-14">Location *</label>
                                              <select class="form-control" name="suburb">
                                               @foreach ($areas as $area)
                                            <option value="{{ $area->id }}">
                                              {{ $area->name }}
                                             </option>
                                               @endforeach
                                            </select>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="suburb" class="form-label fs-14">Package </label>
                                              <select class="form-control" name="package">
                                            <option value="6 Months">6 Months </option>
                                            <option value="3 Months">12 Months </option>
                                            </select>
                                            </div>
                                            
                                            <div class="col-md-7">
                                                <label for="website" class="form-label fs-14">Website (Optional)</label>
                                                <input type="text" name="website" class="form-control" id="website" placeholder="Website URL ">
                                            </div>
                                            
                                            <div class="col-md-5">
                                                <label for="cost" class="form-label fs-14">Estimated Cost</label>
                                                <input type="text" name="cost" class="form-control" id="cost" placeholder="Your estimated cost ">
                                            </div>
                                            
                                            <div class="col-12">
                                                <label for="messages" class="form-label fs-14">Descriptions (Upto 30 Words)</label>
                                                <textarea name="detail" class="form-control" id="" cols="10" maxlength="200" rows="2" placeholder="Write your message here.."></textarea>
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
                    </div>
                  
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero -->


    
 
@include('layouts.frontEnd.footer')

@endsection