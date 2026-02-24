@extends('layouts.frontEnd.layout') 
@section('content')
@include('layouts.frontEnd.header')

<section class="pt-30 pb-20  position-relative z-1 bg-white">
    <div class="container">
        <div class="row g- align-items-lg-center justify-content-center">
            <div class="col-lg-4 col-xl-4">
                <div class="text-center border rounded">
                   <img src="{{ asset('storage/images/'.$team->path) }}" alt="image" class="img-fluid w-100">
                </div>
            </div>
            <div class="col-lg-7 col-xl-6 ps-10">
                <small class="d-inline-block mb-2 fw-bold">🔥Shree Om Mandir {{ $team->designation }} </small>
                <h1> {{$team->name}}</h1>
                <p>
                  {!! $team->detail !!}
                <ul>
                    <li><strong>Experience:</strong>{{ $team->experience }}+ Years </li>
                    <li><strong>Expertise:</strong> {{ $team->expertise }}</li>
                    <li><strong>Availability:</strong> {{ $team->availability }}</li>
                </ul>


                <div class="d-flex flex-wrap align-items-center gap-4">
                    <a href="price.html" class="btn btn-primary border-0 bg-warning btn-arrow btn-arrow-md fs-14 fw-medium rounded mt-5 ">
                        <span class="btn-arrow__text fw-bold text-black">
                            Enquiry Now
                            <span class="btn-arrow__icon">
                                <i class="las la-arrow-right"></i>
                            </span>
                        </span>
                    </a>

                </div>

            </div>

        </div>
    </div>
    <img src="{{ asset('frontEnd/img/shape/isometric-shape-1.png') }}" alt="image" class="hero-3__shape hero-3__shape-1 img-fluid">
    <img src="{{ asset('frontEnd/img/shape/isometric-shape-2.png') }}" alt="image" class="hero-3__shape hero-3__shape-2 img-fluid">
    <img src="{{ asset('frontEnd/img/shape/isometric-shape-3.png') }}" alt="image" class="hero-3__shape hero-3__shape-3 img-fluid">
    <img src="{{ asset('frontEnd/img/shape/isometric-shape-1.png') }}" alt="image" class="hero-3__shape hero-3__shape-4 img-fluid">
</section>
@endsection