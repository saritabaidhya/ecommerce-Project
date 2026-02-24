@extends('layouts.frontEnd.layout') 
@section('content')
@include('layouts.frontEnd.header')
<!-- Home Banner Style V1 -->
      <!-- Home Banner Style V1 -->
    <section class="hero-home10 p-0 overflow-hidden">
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-banner-wrapper home9-hero-content" style="height:250px">
              <div class="navi_pagi_vertical_right dots_nav_light banner-style-one slider-1-grid owl-theme owl-carousel">
                <div class="slide slide-one" style="background-image: url(https://staging.cdms.org.np/storage/images/IOzQR0nSvuLzntihidWoRaDZtN6KsW22xAcAIdGj.jpg);"></div>
              </div>
              <!-- /.carousel-btn-block banner-carousel-btn --> 
            </div>
            <!-- /.main-banner-wrapper --> 
          </div>
        </div>
      </div>
      <div class="home1-banner-content at-home9">
        <div class="container">
       
         <div class="row">
             
          <div class="col-lg-12">
            <div class="main-title mb50 mt50">
              <h2 class="title text-white">Ask a Trade</h2>
              <p class="text mb-0 text-white">Got a question that only a tradesperson can answer? We have thousands of trades ready to answer any question you may have.</p>
            </div>
          </div>
          
        </div>
        </div>
      </div>
    </section>


    
        <!-- Service Details -->
    <section class="">
      <div class="container">
        <div class="row wrap">
          <div class="col-lg-8">
            <div class="column">
              
              <div class="service-about">
                <div class="accordion-style1 faq-page mb90">
                <div class="accordion" id="accordionExample">
                    @foreach ($queries as $query)
                 <div class="accordion-item @if($loop->first) active @endif> mb-2">
                    <h2 class="accordion-header" id="heading{{$query->id}}">
                      <button class="accordion-button @if(!$loop->first) collapsed @endif " type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$query->id}}" aria-expanded="false" aria-controls="collapse{{$query->id}}">{{$query->name}}</button>
                    </h2>
                    <div id="collapse{{$query->id}}" class="accordion-collapse  collapse @if($loop->first) show @endif" aria-labelledby="heading{{$query->id}}" data-parent="#accordionExample">
                      <div class="accordion-body">{!!$query->detail!!}</div>
                    </div>
                  </div>
                  
                  @endforeach
                  
                   
                  
                  
                </div>
              </div>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="column">
              <div class="blog-sidebar ms-lg-auto">
                
                <div class="freelancer-style1 service-single mb-0 bdrs8">
                  <h4>Need Assistance</h4>
                  <div class="wrapper d-flex align-items-center mt20">
                    <div class="thumb position-relative mb25">
                      <img class="rounded-circle mx-auto" src="https://tradiequote.com.au/storage/images/SgkWkOdMkTHetE1uHdHgnqUF0KDCsdqTrslXApe9.svg" alt="">
                    </div>
                    <div class="ml20">
                      <h5 class="title mb-1">{{$settings->first()->address}}</h5>
                      <p class="mb-0">{{$settings->first()->phone}}</p>
                      <div class="review"><p>{{$settings->first()->email}}</p></div>
                    </div>
                  </div>
                  <hr class="opacity-100">
                  <div class="details">
                   <div class="social-style1 light-style">
                    <a href="{{$settings->first()->facebook}}" target="_blank"><i class="fab fa-facebook-f list-inline-item"></i></a>
                    <a href="{{$settings->first()->instagram}}" target="_blank"><i class="fab fa-instagram list-inline-item"></i></a>
                    <a href="{{$settings->first()->youtube}}" target="_blank"><i class="fab fa-linkedin-in list-inline-item"></i></a>
                  </div>
                  </div>
                  <div class="d-grid mt30">
                    <a href="/contacts" class="ud-btn btn-thm-border">Contact Now<i class="fal fa-arrow-right-long"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@include('layouts.frontEnd.footer')

@endsection