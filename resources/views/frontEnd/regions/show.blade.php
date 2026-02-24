@extends('layouts.frontEnd.layout') @section('content') @include('layouts.frontEnd.header')
<!-- Hero -->
<section class="bg-primary-2 pt-60 pb-60">
    <div class="">
        <div class="about-banner bg-dark pt-20 pb-80 px-2" style="background: url('{{ asset('storage/images/' . $area->path) }}') center center / cover no-repeat;">
            <div class="container">
                <div class="row align-items-center g-4">
                    <div class="col-xl-7">
                        <div class="pb-40">
                            <span class="fs-14 text-primary mb-2" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Home / Region / {{$area->name}}</span>
                            <h1 class="text-white mb-3" >{{$area->name}}</h1>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Hero -->

<section class="pt-60 pb-60">
    <div class="container">
        <div class="row">
            @foreach($utilitytypes as $utilitytype)
            <div class="col-md-3">
                <div class="card rounded-3 mb-4">
                    <div class="card-header pt-4 border-bottom-0">
                        <a href="{{ route('category.show', [$utilitytype->area->slug, $utilitytype->slug]) }}" class="d-block text-decoration-none">
                            <div class="list-thumb">
                            <img src="{{ asset('storage/images/' . $utilitytype->path) }}" alt="image" class="img-fluid w-100 cropped-image">

                            </div>
                            </a>
                    </div>
                    <div class="card-body">
                        <div class="hstack gap-1 align-items-center mb-2">
                            <span class="d-block flex-shrink-0 fs-18">
                                    <i class="las la-hammer"></i>
                                </span>
                            <span class="d-block fs-14">
                                    {{ $utilitytype->utilities_count }} Service List
                                </span>
                        </div>
                        <h6 class="mb-2">
                                <a href="{{ route('category.show', [$utilitytype->area->slug, $utilitytype->slug]) }}" class="text-decoration-none text-dark hover:text-primary">
                                   {{ $utilitytype->name}}
                                </a>
                            </h6>
                        <p class="pb-0 mb-1">@foreach ($areas as $area) @if ($utilitytype->address == $area->id) {{ $area->name }} @endif @endforeach
                        </p>
                        <p class="mb-0 tt-line-clamp tt-clamp-2 fs-14">
                             {{ $utilitytype->hero}}
                        </p>
                        <h6 class="fs-14 fw-normal mb-0 mt-3"><a href="{{ route('category.show', [$utilitytype->area->slug, $utilitytype->slug]) }}"> <span class="text-primary fw-bold ">View List</a></span>
                            </h6>
                    </div>
                </div>

                
            </div>
            @endforeach
        </div>
    </div>
</section>


@include('layouts.frontEnd.footer') @endsection