@extends('layouts.frontEnd.layout') 
@section('content')
@include('layouts.frontEnd.header')
 <!-- Breadcrumb -->
  <section class="banner-bg bg-dark imagebanner">
    <div class="container">
        <div class="row ">
            <div class="col-md-8 text-white mt-3">
                <span class="fs-16 text-white mb-2" >Home / Teams</span>

                <h4 class="fs-28 fw-bold text-warning mb-2" > Our Team
                </h4>
            </div>
        </div>
    </div>
  </section>
<!-- /Breadcrumb -->


<section class="bg-white  pt-120 pb-60">
    <div class="container">      
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
              @foreach($teams as $team)
              <div class="col-md-3">
                <div class="team">
                    <img src="{{ asset('storage/images/'.$team->path) }}" alt="image" class="img-fluid w-100">
                    <div class="team__content p-4 ">
                        <div class="d-flex align-items-start gap-2">
                            <div class="flex-grow-1">
                                <a href="{{ route('teams.show',$team->slug) }}" style="text-decoration: none;">
                                    <h6 class="mb-2">{{ $team->name }}</h6>
                                </a>
                                <span class="d-block fs-14">
                                    {{ $team->designation }}
                                </span>
                            </div>
                            <div class="flex-shrink-0">
                                <div class="team__social">
                                    <button type="button" class="team__btn-expand">
                                            {{ $team->experience }}y+
                                    </button>
                                </div>
                            </div>
                        </div>
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