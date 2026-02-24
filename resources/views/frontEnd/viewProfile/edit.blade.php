@extends('layouts.frontEnd.layout') @section('content') @include('layouts.frontEnd.header')

<!-- Hero -->
<section class="bg-primary-2 pt-60 pb-60">
    <div class="">
        <div class="bg-dark pt-80 pb-80 px-2">
            <div class="container">
                <div class="row align-items-center g-4">
                    <div class="col-xl-7">
                        <div class="pb-40">
                            <span class="fs-14 text-primary mb-2" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Home / Profile / {{auth()->guard('merchant')->user()->name}}</span>
                            <h1 class="text-white mb-3" >{{auth()->guard('merchant')->user()->name}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Hero -->

<section class="pt-60 pb-60 position-relative">
    <div class="container">
        <form action="{{ route('viewProfile.update', $viewProfile->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="row">
                <div class="col-md-8">
                                <div class="row g-3">
                <div class="col-12">
                    <label for="fullname" class="form-label fs-14">Full Name *</label>
                    <input type="text" name="name" value="{{ old('name', $viewProfile->name) }}" class="form-control" id="fullname" placeholder="Your Full Name" required />
                </div>
                <div class="col-6">
                    <label for="phone" class="form-label fs-14">Phone</label>
                    <input type="text" name="phone" value="{{ old('phone', $viewProfile->phone) }}" class="form-control" id="phone" placeholder="Your Contact No." required />
                </div>
                <div class="col-6">
                    <label for="email" class="form-label fs-14">Email</label>
                    <input type="text" name="email" value="{{ old('email', $viewProfile->email) }}" class="form-control" id="email" placeholder="Your Email Address" required />
                </div>
                
                 <div class="col-12">
                    <label for="email" class="form-label fs-14">Services</label>
                     <select id="select2D" class="form-select" name="service[]" multiple>
    @foreach ($utilities as $utility)
        <option value="{{ $utility->id }}"
            {{ in_array($utility->id, $viewProfile->service ?? []) ? 'selected' : '' }}>
            {{ $utility->name }}
        </option>
    @endforeach
</select>
                </div>
                
                <div class="col-12">
                    <label  class="form-label fs-14">Hero Text (30 Words Only)</label>
                   <textarea class="form-control" name="hero">{{ old('hero', $viewProfile->hero) }}</textarea>
                </div>
                
                <div class="col-12">
                    <label  class="form-label fs-14">Descriptions</label>
                   <textarea id="basic-conf" class="form-control" name="detail">{{ old('detail', $viewProfile->detail) }}</textarea>
                </div>
                
                 
                <div class="col-12">
    <label for="image" class="form-label fs-14">Upload New Images</label>
    <input type="file" name="image[]" id="image" class="form-control mb-3" accept="image/*" multiple>

@if ($viewProfile->path)
    <div class="form-group">
        <label class="form-label fs-14">Featured Images (800px * 600px) Less than 200KB . Not more than 5 images</label>
        <div class="row mt-3">
            @foreach (json_decode($viewProfile->path) as $image)
                <div class="col">
                    <img src="{{ asset('storage/images/' . $image) }}" alt="Image" class="img-thumbnail" style="width: 200px;">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="delete_images[]" value="{{ $image }}" id="delete_{{ $image }}">
                        <label class="form-check-label" for="delete_{{ $image }}">
                            Delete
                        </label>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif

                </div>

                <div class="col-12">
                    <button type="submit" href="#" class="btn btn-primary btn-arrow btn-arrow-md btn-lg fs-14 fw-medium rounded">
                        <span class="btn-arrow__text">
                            Submit
                            <span class="btn-arrow__icon">
                                <i class="las la-arrow-right"></i>
                            </span>
                        </span>
                    </button>
                    <span class="d-block fs-14 mt-4 fw-medium">
                        * By submitting information, you accept our Terms & Conditions
                    </span>
                </div>
            </div>

                </div>
                
                <div class="col-md-4">
                     <div class="row g-3">
                   <div class="col-12">
                    <label  class="form-label fs-14">Address</label>
                    <input type="text" name="address" value="{{ old('address', $viewProfile->address) }}" class="form-control"  placeholder="Your Address" />
                </div>
                
                <div class="col-12">
                    <label class="form-label fs-14">ABN Number</label>
                    <input type="text" name="abn" value="{{ old('abn', $viewProfile->abn) }}" class="form-control"  placeholder="Your ABN Number" />
                </div>
                
                 <div class="col-12">
                    <label class="form-label fs-14">Website</label>
                    <input type="text" name="website" value="{{ old('website', $viewProfile->website) }}" class="form-control"  placeholder="Website URL" />
                </div>
                <div class="col-12">
                    <label for="email" class="form-label fs-14">Map URL</label>
                    <input type="text" name="map" value="{{ old('map', $viewProfile->map) }}" class="form-control"  placeholder="Embeded Map URL" />
                </div>
                 <div class="col-12">
                    <label class="form-label fs-14">Fav Icon (40px * 40px) Less than 200KB</label>
                    <input type="file" name="fav" class="form-control"/>
                    
                    @if ($viewProfile->fav)
                                    <img src="{{ asset('storage/images/' . $viewProfile->fav) }}" alt="Current Image" class="img-thumbnail mt-3" >
                                @endif
                </div>
                </div>
                </div>
            </div>
        </form>
    </div>
</section>

@include('layouts.frontEnd.footer') @endsection
