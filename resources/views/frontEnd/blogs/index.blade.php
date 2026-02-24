@extends('layouts.frontEnd.layout') 
@section('content')
@include('layouts.frontEnd.header')
<!-- Breadcrumb -->
 <section class="banner-bg bg-dark imagebanner">
    <div class="container">
        <div class="row ">
            <div class="col-md-8 text-white mt-3">
                <span class="fs-16 text-white mb-2" >Home / Blogs</span>

                <h4 class="fs-28 fw-bold text-warning mb-2" >Blogs
                </h4>
            </div>
        </div>
    </div>
  </section>

  <!-- /Breadcrumb -->

    <section class="bg-primary-2  pt-60 pb-60">
      <div class="container">
        
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              @foreach($blogs as $blog)
              <div class="col-md-6 col-lg-4" data-sal="slide-up" data-sal-duration="500" data-sal-delay="600" data-sal-easing="ease-in-out-sine">
                    <div class="card rounded-3 h-100">
                        <div class="card-header pt-4 border-bottom-0">
                            <a href="{{ route('blog.show',$blog->slug) }}" class="d-block text-decoration-none">
                                <div class="list-thumb-lg">
                                <img src="{{ asset('storage/images/' . $blog->path) }}" alt="image" class="img-fluid cropped-image">
                                </div>
                            </a>
                        </div>
                        <div class="card-body blog-content">
                            <div class="hstack gap-1 align-items-center mb-2">
                                <span class="d-block flex-shrink-0 fs-18">
                                    <i class="las la-calendar-alt"></i>
                                </span>
                                <span class="d-block fs-14">
                                   {{ $blog->created_at->format('d M Y') }}
                                </span>
                            </div>
                            <h6 class="mb-4">
                                <a href="{{ route('blog.show',$blog->slug) }}" class="text-decoration-none text-dark hover:text-primary">
                                 {{$blog->name}}
                                </a>
                            </h6>
                             <a href="{{ route('blog.show',$blog->slug) }}" class="d-block text-decoration-none">
                            <p class="mb-0 tt-line-clamp tt-clamp-2">
                               {!! $blog->detail!!}
                            </p>
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