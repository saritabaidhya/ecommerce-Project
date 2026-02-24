@extends('layouts.superAdmin.layout')
@section('content')
@include('layouts.superAdmin.header')
<div class="main main-app p-3 p-lg-4">
<div class="d-flex align-items-center justify-content-between mb-4">
   <div>
      <ol class="breadcrumb fs-sm mb-1">
         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
         <li class="breadcrumb-item active" aria-current="page">User Profile</li>
      </ol>
      <h4 class="main-title mb-0">User Profile</h4>
   </div>
   <nav class="nav nav-icon nav-icon-lg">
   </nav>
</div>
<div class="row g-3 justify-content-center">
   <div class="card card-one mt-3">
      <div class="card-header">
         <h6 class="card-title">User Profile</h6>
         <nav class="nav nav-icon nav-icon-sm ms-auto">
            <a href="{{ route('profile.edit', $user->id) }}" class="btn btn-primary btn-icons"><i class="ri-edit-2-line"></i> Edit
            User Profile</a>
         </nav>
      </div>
      <div class="card-body p-3">
         <div class="media-profile mb-5">
           
             <div class="row g-5">
        <div class="col-xl">
          <div class="media-profile mb-5">
            <div class="media-img mb-3 mb-sm-0">
              <img src="/storage/images/SgkWkOdMkTHetE1uHdHgnqUF0KDCsdqTrslXApe9.svg" class="img-fluid w-100" alt="...">
            </div><!-- media-img -->
            <div class="media-body">
              <h5 class="media-name">{{$user->name}}</h5>
              <p class="d-flex gap-2 mb-4"><i class="ri-star-line"></i> Super Admin</p>
            </div><!-- media-body -->
          </div><!-- media-profile -->

          <div class="row row-cols-sm-auto g-4 g-md-5 g-xl-4 g-xxl-5">
            <div class="col">
              <div class="profile-item">
                <i class="ri-medal-2-line"></i>
                <div class="profile-item-body">
                  <p>Email</p>
                  <span>{{$user->email}}</span>
                </div><!-- profile-item-body -->
              </div><!-- profile-item -->
            </div><!-- col -->
            <div class="col">
              <div class="profile-item">
                <i class="ri-suitcase-line"></i>
                <div class="profile-item-body">
                  <p>Created </p>
                  <span>{{$user->created_at}}</span>
                </div><!-- profile-item-body -->
              </div><!-- profile-item -->
            </div><!-- col -->
           
          </div><!-- row -->

         

        </div><!-- col -->
      </div><!-- row -->
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