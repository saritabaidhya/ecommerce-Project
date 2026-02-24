@extends('layouts.frontEnd.layout') 
@section('content')
@include('layouts.frontEnd.header')


 <!-- Breadcrumb -->
 <section class="banner-bg bg-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center">
                    <span class="fs-16 text-danger mb-2" >Home / Privacy Policy</span>
                    <h1 class="text-white mb-3" >
                  Privacy Policy
                    </h1>
                    <p class="text-white mb-0 max-text-60 mx-auto text-opacity-75" >
                        Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat.

                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Breadcrumb -->



<section class="pt-60 pb-60 position-relative">
        <div class="container">
            
            {!!$policies->first()->detail!!}
        </div>
    </section>

    
@include('layouts.frontEnd.footer')

@endsection

