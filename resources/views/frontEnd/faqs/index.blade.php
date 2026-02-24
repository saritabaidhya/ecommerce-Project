@extends('layouts.frontEnd.layout') 
@section('content')
@include('layouts.frontEnd.header')
 <!-- Breadcrumb -->
 <section class="banner-bg bg-dark">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-8">
              <div class="text-center">
                  <span class="fs-16 text-danger mb-2" >Home / Faq's</span>
                  <h1 class="text-white mb-3" >
                    Faq's
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


<section class="bg-primary-2  pt-120 pb-60">
   <div class="container">
            <div class="row g-4 align-items-center justify-content-center">
                <div class="col-lg-6 col-xxl-5" >
                    <div class="accordion border-0 vps-hosting-accordion" id="accordionFaq">
                      @foreach ($faqs as $faq)
                        <div class="accordion-item border rounded-3 mb-4">
                            <h2 class="accordion-header" id="faq-heading{{$faq->id}}">
                                <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse{{$faq->id}}" aria-expanded="false" aria-controls="faq-collapse{{$faq->id}}">
                                    <span class="text-body fs-16 fw-bold">{{$faq->name}}</span>
                                </button>
                            </h2>
                            <div id="faq-collapse{{$faq->id}}" class="accordion-collapse collapse  @if ($loop->first) show @endif" aria-labelledby="faq-heading{{$faq->id}}" data-bs-parent="#accordionFaq">
                                <div class="accordion-body pt-0">{!!$faq->detail!!}</div>
                            </div>
                        </div>
                        @endforeach

                         
                        
                    </div>
                </div>
                <div class="col-lg-4 col-xxl-4" data-sal="slide-up" data-sal-duration="500" data-sal-delay="400" data-sal-easing="ease-in-out-sine">
                    <div class="text-center">
                        <img src="{{ asset('frontEnd/img/mobilebanner.png') }}" alt="image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
  </section>

@include('layouts.frontEnd.footer')

@endsection