@extends('layouts.frontEnd.layout') 
@section('content')
@include('layouts.frontEnd.header')

 <!-- Breadcrumb -->
<section class="banner-bg bg-dark imagebanner">
    <div class="container">
        <div class="row">
            <div class="col-xxl-7 col-lg-9 text-white">
                <span class="fs-16 text-white mb-2" >Home / Horoscope</span>
                <h4 class="fs-28 fw-bold text-warning mb-2" >Horoscope
                </h4>   
            </div>
        </div>
    </div>
</section>
<!-- /Breadcrumb -->

<!-- Pricing -->
<section class="pt-40 pb-40">
    <div class="pb-40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="text-center">
                        <div class="d-flex justify-content-center" >
                            <div class="pricing-nav-pills d-inline-block mx-auto py-2 px-3 border rounded-pill overflow-x-auto">
                                <ul class="nav nav-pills tab-nav-9 flex-nowrap">
                                    <li class="nav-item flex-shrink-0">
                                        <a class="text-black nav-link rounded-pill fs-14 active" href="#" data-bs-toggle="pill" data-bs-target="#plan-1">
                                           Daily
                                        </a>
                                    </li>
                                    <li class="nav-item flex-shrink-0">
                                        <a class="text-black nav-link rounded-pill fs-14" href="#" data-bs-toggle="pill" data-bs-target="#plan-2">
                                           Weekly
                                        </a>
                                    </li>

                                    <li class="nav-item flex-shrink-0">
                                        <a class="text-black nav-link rounded-pill fs-14" href="#" data-bs-toggle="pill" data-bs-target="#plan-3">
                                           Monthly
                                        </a>
                                    </li>
                                    <li class="nav-item flex-shrink-0">
                                        <a class="text-black nav-link rounded-pill fs-14" href="#" data-bs-toggle="pill" data-bs-target="#plan-4">
                                        Yearly
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="plan-1">
                        <div class="row ">

                             @foreach ($horoscopes as $horoscope)
                                <div class="col-md-12">
                                    <div class="card p-3 mb-3">
                                        <div class="d-flex">
                                            <a href=""><img src="{{ $horoscope['rashifal_image'] }}"
                                                    class="avatar avatar-medium rounded  p-1 bg-light"
                                                    style="width: auto;" alt="{{ $horoscope['rashifal_eng_sign'] }}">
                                            </a>
                                            <div class="flex-1 ms-3">
                                                <div href=""
                                                    class="d-block text-primary title text-dark h5 fw-bold mb-0">
                                                    {{ $horoscope['rashifal_sign'] }}</div>
                                                <span
                                                    class="text-danger fw-bold">{{ $horoscope['rashifal_char'] }}</span>
                                                    <p class="mt-3 small"> {!! $horoscope['prediction'] !!}</p>

                                                {{--<p class="mt-3 small"> {!! Str::limit($horoscope['prediction'], $limit = 400, $end = '...') !!}
                                                      <a
                                                        href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $horoscope['sign_id'] }}"> Read
                                                        More</a> 
                                                    </p>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Content Start -->
                                    {{-- <div class="modal fade" id="exampleModal{{ $horoscope['sign_id'] }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel{{ $horoscope['sign_id'] }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Daily Horoscope</h5>
                                                    <button type="button" class="btn btn-icon btn-close"
                                                        data-bs-dismiss="modal" id="close-modal"><i
                                                            class="uil uil-times fs-4 text-dark"></i></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card p-3 mb-3">
                                                        <div class="d-flex">
                                                            <a href=""><img
                                                                    src="{{ $horoscope['rashifal_image'] }}"
                                                                    class="avatar avatar-medium rounded  p-1 bg-light"
                                                                    style="width: auto;"
                                                                    alt="{{ $horoscope['rashifal_eng_sign'] }}"> </a>
                                                            <div class="flex-1 ms-3">
                                                                <div href=""
                                                                    class="d-block text-primary title text-dark h5 fw-bold mb-0">
                                                                    {{ $horoscope['rashifal_sign'] }}</div>
                                                                <span
                                                                    class="text-danger fw-bold">{{ $horoscope['rashifal_char'] }}</span>

                                                                <p class="mt-3 small"> {{ $horoscope['prediction'] }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- Modal Content End -->
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="tab-pane fade" id="plan-2">
                        <div class="row ">
                            @foreach ($weeks as $week)
                                <div class="col-md-12">
                                    <div class="card p-3 mb-3">
                                        <div class="d-flex">
                                            <a href=""><img src="{{ $week['rashifal_image'] }}"
                                                    class="avatar avatar-medium rounded  p-1 bg-light"
                                                    style="width: auto;" alt="{{ $week['rashifal_eng_sign'] }}">
                                            </a>
                                            <div class="flex-1 ms-3">
                                                <div href=""
                                                    class="d-block text-primary title text-dark h5 fw-bold mb-0">
                                                    {{ $week['rashifal_sign'] }}</div>
                                                <span
                                                    class="text-danger fw-bold">{{ $week['rashifal_char'] }}</span>

                                                <p class="mt-3 small"> {{$week['prediction']}} </p>
                                            </div>
                                        </div>
                                    
                                    </div>
                                    
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="plan-3">
                        <div class="row ">
                             @foreach ($months as $month)
                                <div class="col-md-12">
                                    <div class="card p-3 mb-3">
                                        <div class="d-flex">
                                            <a href=""><img src="{{ $month['rashifal_image'] }}"
                                                    class="avatar avatar-medium rounded  p-1 bg-light"
                                                    style="width: auto;" alt="{{ $month['rashifal_eng_sign'] }}">
                                            </a>
                                            <div class="flex-1 ms-3">
                                                <div href=""
                                                    class="d-block text-primary title text-dark h5 fw-bold mb-0">
                                                    {{ $month['rashifal_sign'] }}</div>
                                                <span
                                                    class="text-danger fw-bold">{{ $month['rashifal_char'] }}</span>

                                                <p class="mt-3 small"> {{$month['prediction']}} </p>
                                            </div>
                                        </div>
                                    
                                    </div>
                                    
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="plan-4">
                        <div class="row ">
                             @foreach ($years as $year)
                                <div class="col-md-12">
                                    <div class="card p-3 mb-3">
                                        <div class="d-flex">
                                            <a href="">
                                                <img src="{{ $year['rashifal_image'] }}"
                                                    class="avatar avatar-medium rounded  p-1 bg-light"
                                                    style="width: auto;" alt="{{ $year['rashifal_eng_sign'] }}">
                                            </a>
                                            <div class="flex-1 ms-3">
                                                <div href=""
                                                    class="d-block text-primary title text-dark h5 fw-bold mb-0">
                                                    {{ $year['rashifal_sign'] }}</div>
                                                <span
                                                    class="text-danger fw-bold">{{ $year['rashifal_char'] }}</span>

                                                <p class="mt-3 small"> {{$year['prediction']}} </p>
                                            </div>
                                        </div>
                                    
                                    </div>
                                    
                                </div>
                            @endforeach
                          




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Pricing -->

    
@include('layouts.frontEnd.footer')

@endsection