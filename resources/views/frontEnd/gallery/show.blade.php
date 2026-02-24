@extends('layouts.frontEnd.layout') 
@section('content')
@include('layouts.frontEnd.header')

<section class="banner-bg bg-dark imagebanner">
    <div class="container">
        <div class="row ">
            <div class="col-md-8 text-white mt-3">
                <span class="fs-16 text-white mb-2" >Home / Gallery</span>
                <h4 class="fs-28 fw-bold text-warning mb-2" >  {{$image->name}}
                </h4>
            </div>
        </div>
    </div>
  </section>
<!-- /Breadcrumb -->


@php
    $imagePaths = json_decode($image->image, true);
@endphp
    <section class="bg-primary-2  pt-60 pb-60">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="masonry-container">
              <div class="row">
                @foreach($imagePaths as $image)
                <div class="col-md-4">
                  <div class="masonry-item">
                    <img src="{{ asset('storage/images/' . $image) }}" alt="image" class="img-fluid rounded-3 mb-3">
                  </div>
                </div>
                @endforeach
              </div>
            </div> 
          </div>
        </div>
      </div>
    </section>
@include('layouts.frontEnd.footer')

@endsection