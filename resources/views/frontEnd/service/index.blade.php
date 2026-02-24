@extends('layouts.frontEnd.layout') 
@section('content')
@include('layouts.frontEnd.header')

 <section class="banner-bg bg-dark imagebanner">
    <div class="container">
        <div class="row ">
            <div class="col-md-8 text-white mt-3">
                <span class="fs-16 text-white mb-2" >Home / Services</span>
                <h4 class="fs-28 fw-bold text-warning mb-2" > Services
                </h4>
            </div>
        </div>
    </div>
  </section>

<section class="pt-60 pb-60">
    <div class="container">
        <div class="row">
         
            <div class="col-md-12">
                <div class="row">
                    @forelse($utilities as $utility)
                        <div class="col-md-4 col-lg-4 sal-animate mb-4" >
                            <div class="card rounded-3 h-100 pooja-card">
                                <div class="card-header pt-4 border-bottom-0">
                                    <a href="{{ route('service.show', [$utility->utilitytype->slug, $utility->slug]) }}" class="d-block text-decoration-none">
                                        <div class="list-thumb-lg">
                                        <img src="{{ asset('storage/images/' . $utility->path) }}" alt="image" class="img-fluid w-100">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="product-info">
                                        <h6 class="mb-2">
                                            <a href="{{ route('service.show', [$utility->utilitytype->slug, $utility->slug]) }}" class="text-decoration-none hover:text-primary">
                                                {{$utility->name}} </a>
                                        </h6>
                                        <div class="details">
                                         {!! $utility->detail !!}   
                                         </div>   
                                        {{-- <p class="text-black mb-0">Starting at: <span class="text-danger fw-semibold">
                                        @if ($utility->offprice)<del class="fw-bold text-body">
                                        Rs.{{$utility->offprice}}</del> @endif
                                        Rs.{{$utility->price}}</span>
                                        </p> --}}
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
        </div>
    </div>
</section>

@include('layouts.frontEnd.footer')

@endsection