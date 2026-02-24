@extends('layouts.frontEnd.layout') 
@section('content')
@include('layouts.frontEnd.header')

 <section class="banner-bg bg-dark imagebanner">
    <div class="container">
        <div class="row ">
            <div class="col-md-8 text-white mt-3">
                <span class="fs-16 text-white mb-2" >Home / Services/ Marketplace</span>
                <h4 class="fs-28 fw-bold text-warning mb-2" > Marketplaces
                </h4>
            </div>
        </div>
    </div>
  </section>

<section class="pt-60 pb-60">
    <div class="container">
        <div class="row">


            @foreach ($marketplaces as $marketplace)
                <div class="col-md-3 mb-4 ">
                    <div class="brand-card p-5 border rounded-3 position-relative z-1 transition overflow-hidden bg-white">
                        <a href="{{ route('marketplaces.show',$marketplace->slug) }}" class="d-block text-decoration-none text-dark">
                            <div class="text-center list-thumb-lg ">
                            <img src="{{ asset('storage/images/'.$marketplace->path) }}" alt="icon" class="img-fluid mb-6 w-100 cropped-image">
                        </div>
                        </a>
                        <div class="market-info">
                        <h6 class="fs-18 mb-2 mt-2">
                            <a href="{{ route('marketplaces.show',$marketplace->slug) }}" class="d-block text-decoration-none text-dark">
                                {{ $marketplace->name }}
                            </a>
                        </h6>
                        <p class="mb-2 fs-14">{{ $marketplace->hero }}</p>
                        </div>
                        <small class="fw-bold text-danger fs-18">
                            @if ($marketplace->price)<del class="fw-bold text-body"> Rs.{{ $marketplace->price }}</del> @endif
                            @if ($marketplace->offprice) Rs.{{ $marketplace->offprice }} @endif
                        </small> 
                    </div>
                </div>
            @endforeach


           
        </div>
    </div>
</section>

@include('layouts.frontEnd.footer')

@endsection