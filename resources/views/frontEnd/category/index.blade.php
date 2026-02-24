@extends('layouts.frontEnd.layout') @section('content') @include('layouts.frontEnd.header')
 <!-- Breadcrumb -->
 <section class="banner-bg bg-dark">
    <div class="container">
        <div class="row ">
            <div class="col-md-8 text-white mt-3">
                <span class="fs-16 text-white mb-2" >Home / Categories</span>
                <h4 class="fs-28 fw-bold text-warning mb-2" > Categories
                </h4>
            </div>
            
        </div>
    </div>
  </section>
  <!-- /Breadcrumb -->
  

<section class="pt-120 pb-60">
    <div class="container">
        <div class="row">
            @foreach($utilitytypes as $utilitytype)
            <div class="col-md-3">
                <div class="card rounded-3 mb-4">
                    <div class="card-header pt-4 border-bottom-0">
                        <a href="{{ route('category.show',$utilitytype->slug) }}" class="d-block text-decoration-none">
                            <div class="">
                            <img src="{{ asset('storage/images/' . $utilitytype->path) }}" alt="image" class="img-fluid w-100">

                            </div>
                            </a>
                    </div>
                    <div class="card-body">
                        <div class="hstack gap-1 align-items-center mb-2">
                            <span class="d-block flex-shrink-0 fs-18">
                                    <i class="las la-book"></i>
                                </span>
                            <span class="d-block fs-14">
                                    {{ $utilitytype->utilities_count }} Service List
                                </span>
                        </div>
                        <h6 class="mb-4">
                                <a href="{{ route('category.show', $utilitytype->slug) }}" class="text-decoration-none text-dark hover:text-primary">
                                   {{ $utilitytype->name}}
                                </a>
                            </h6>
                       
                        {{-- <p class="mb-0 tt-line-clamp tt-clamp-2">
                            With over two decades of experience in high secure web hosting journey.
                        </p> --}}
                        <h6 class="fs-14 fw-normal mb-0 mt-3 text-dark"><a href="{{ route('category.show', $utilitytype->slug) }}">
                             <span class="fw-bold text-dark ">View List</a></span>
                            </h6>
                    </div>
                </div>

                
            </div>
            @endforeach
        </div>
    </div>
</section>


@include('layouts.frontEnd.footer') @endsection