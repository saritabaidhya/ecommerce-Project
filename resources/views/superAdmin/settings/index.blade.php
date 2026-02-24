@extends('layouts.superAdmin.layout')
@section('content')
@include('layouts.superAdmin.header')
<div class="main main-app p-3 p-lg-4">
<div class="d-flex align-items-center justify-content-between mb-4">
   <div>
      <ol class="breadcrumb fs-sm mb-1">
         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
         <li class="breadcrumb-item active" aria-current="page">Settings</li>
      </ol>
      <h4 class="main-title mb-0">Site Settings</h4>
   </div>
   <nav class="nav nav-icon nav-icon-lg">
   </nav>
</div>
<div class="row g-3 justify-content-center">
   <div class="card card-one mt-3">
      <div class="card-header">
         <h6 class="card-title">Site Setting Profile</h6>
         <nav class="nav nav-icon nav-icon-sm ms-auto">
            <a href="{{ route('settings.edit', $settings->first()->id) }}" class="btn btn-primary btn-icons"><i class="ri-edit-2-line"></i> Edit
            Setting</a>
         </nav>
      </div>
      <div class="card-body p-3">
         <div class="media-profile mb-5">
            <div class="media-img rounded-0 mb-3 mb-sm-0">
              <img src="{{ asset('storage/images/' . $settings->first()->path) }}" class="img-fluid" alt="...">
            </div><!-- media-img -->
            <div class="media-body">
              <h5 class="media-name">{{$settings->first()->name}}</h5>
              <p class="d-flex gap-2 mb-4"><i class="ri-map-pin-line"></i> {{$settings->first()->address}}</p>
              <div class="mb-0">{!! $settings->first()->detail !!}</div>
            </div><!-- media-body -->
          </div>

          <div class="row row-cols-sm-auto g-4 g-md-5 g-xl-4 g-xxl-5">
            <div class="col">
              <div class="profile-item">
                <i class="ri-phone-line"></i>
                <div class="profile-item-body">
                  <p>{{$settings->first()->phone}}</p>
                  <span>Contact No.</span>
                </div><!-- profile-item-body -->
              </div><!-- profile-item -->
            </div><!-- col -->
            <div class="col">
              <div class="profile-item">
                <i class="ri-mail-line"></i>
                <div class="profile-item-body">
                  <p>{{$settings->first()->email}}</p>
                  <span>Email Address</span>
                </div><!-- profile-item-body -->
              </div><!-- profile-item -->
            </div><!-- col -->
            <div class="col">
              <div class="profile-item">
                <i class="ri-globe-line"></i>
                <div class="profile-item-body">
                  <p>{{$settings->first()->website}}</p>
                  <span>Website</span>
                </div><!-- profile-item-body -->
              </div><!-- profile-item -->
            </div><!-- col -->
            <div class="col">
              <div class="profile-item">
                <i class="ri-map-pin-line"></i>
                <div class="profile-item-body">
                  <p><a href ="{{$settings->first()->map}}" class="text-dark" target="_blank" >Get Direction </a></p>
                  <span>Map Location</span>
                </div><!-- profile-item-body -->
              </div><!-- profile-item -->
            </div><!-- col -->
          </div>

          <div class="chat-group mt-4 mb-4">
            <h5> Social Links</h5>
            <div class="chat-item">
              <div class="avatar"><span class="avatar-initial"><i class="ri-facebook-line"></i></span></div>
              <div class="chat-item-body">
                <h6>Facebook</h6>
                <span><strong>{{$settings->first()->facebook}}</strong></span>
              </div><!-- chat-body -->
            </div><!-- chat-item -->
            <div class="chat-item">
              <div class="avatar"><span class="avatar-initial"><i class="ri-instagram-line"></i></span></div>
              <div class="chat-item-body">
                <h6>Instagram</h6>
                <span><strong>{{$settings->first()->instagram}}</strong></span>
              </div><!-- chat-body -->
            </div><!-- chat-item -->
            <div class="chat-item">
              <div class="avatar"><span class="avatar-initial"><i class="ri-youtube-line"></i></span></div>
              <div class="chat-item-body">
                <h6>Youtube</h6>
                <span><strong>{{$settings->first()->youtube}}</strong></span>
              </div><!-- chat-body -->
            </div><!-- chat-item -->
          </div>
      </div>
      <!-- card-body -->
   </div>
   <!-- card -->
</div>
<!-- row -->

@if ($message = Session::get('success'))
<div class="toast-container position-fixed bottom-0 end-0 p-3" id="toastPlacement">
    <div class="toast">
          <div class="toast-header bg-success">
              <img src="assets/images/logo-sm.png" alt="" height="20" class="me-1">
              <h6 class="me-auto my-0 text-white">Success!</h6>
              <small class="text-white">0 mins ago</small>
              <button type="button" class="btn-close text-white" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body flex-fill bg-success">
            <p class="text-white">{{ $message }}</p>
          </div>
    </div>
  </div>
  @endif

  @include('layouts.superAdmin.footer')
  @endsection