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
              <h2 class="title text-white">Home Improvement Cost Guides</h2>
              <p class="text mb-0 text-white">We compare dozens of quotes nationwide to provide average prices for hundreds of home improvement jobs.</p>
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
                <h4>Description</h4>
                <p class="text mb30">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                <p class="text mb30">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                <hr class="opacity-100 mb60 mt60">
                <h4 class="mb30">Attachments</h4>
                <div class="row">
                  <div class="col-6 col-lg-3">
                    <div class="project-attach">
                      <h6 class="title">Project Brief</h6>
                      <p>PDF</p>
                      <span class="icon flaticon-page"></span>
                    </div>
                  </div>
                  <div class="col-6 col-lg-3">
                    <div class="project-attach">
                      <h6 class="title">Project Brief</h6>
                      <p>PDF</p>
                      <span class="icon flaticon-page"></span>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="column">
              <div class="blog-sidebar ms-lg-auto">
                <div class="price-widget pt25 bdrs8">
                  <h3 class="widget-title">Find Tradespeople, and get quotes!</h3>
                  <p class="text fz14">No Hassle. No Obligations. Just Results. </p>
                  <div class="d-grid">
                    <a href="page-contact.html" class="ud-btn btn-thm">Find Tradepeople<i class="fal fa-arrow-right-long"></i></a>
                  </div>
                </div>
                <div class="freelancer-style1 service-single mb-0 bdrs8">
                  <h4>Ask a Trade</h4>
                  <div class="wrapper d-flex align-items-centers mt20">
                    <div class="thumb position-relative mb25">
                      <img class="rounded-circle mx-auto" src="https://tradiequote.com.au/storage/images/SgkWkOdMkTHetE1uHdHgnqUF0KDCsdqTrslXApe9.svg" alt="">
                    </div>
                    <div class="ml20">
                      <p class="mb-0">Got a question that only a tradesperson can answer? We have thousands of trades ready to answer any question you may have</p>
                      <div class="review"><p><i class="fas fa-star fz10 review-color pr10"></i><span class="dark-color">4.9</span> (595 reviews)</p></div>
                    </div>
                  </div>
                  <hr class="opacity-100">
                  <div class="details">
                    <div class="fl-meta d-flex align-items-center justify-content-between">
                      <a class="meta fw500 text-start">Location<br><span class="fz14 fw400">Melbourne</span></a>
                      <a class="meta fw500 text-start">Trade People<br><span class="fz14 fw400">1800+</span></a>
                      <a class="meta fw500 text-start">Category<br><span class="fz14 fw400">200+</span></a>
                    </div>
                  </div>
                  <div class="d-grid mt30">
                    <a href="page-contact.html" class="ud-btn btn-thm-border">Contact Buyer<i class="fal fa-arrow-right-long"></i></a>
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