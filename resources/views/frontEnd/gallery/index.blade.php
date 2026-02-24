@extends('layouts.frontEnd.layout') 
@section('content')
@include('layouts.frontEnd.header')
<!-- Breadcrumb -->
 <section class="banner-bg bg-dark">
    <div class="container">
        <div class="row ">
            <div class="col-md-8 text-white mt-3">
                <span class="fs-16 text-white mb-2" >Home / Gallery</span>
                <h4 class="fs-28 fw-bold text-warning mb-2" > Gallery
                </h4>
            </div>
            
        </div>
    </div>
  </section>
  <!-- /Breadcrumb -->

    <!-- Trending Services -->
    <section class="bg-primary-2  pt-60 pb-60">
      <div class="container">
        
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
                  @foreach($galleries as $gallery)
              <div class="col-md-3">
                <div class="card rounded-3 h-100">
                  <div class="card-header pt-4 border-bottom-0">
                    <a href="{{ route('gallery.show',$gallery->slug) }}" class="d-block text-decoration-none">
                      <img src="{{ asset('storage/images/' . $gallery->path) }}" alt="image" class="img-fluid ">
                    </a>
                  </div>
                
                </div>
                  
           </div>
               @endforeach
              </div>
           
          </div>
        </div>
      </div>
    </section>
@include('layouts.frontEnd.footer')

@endsection