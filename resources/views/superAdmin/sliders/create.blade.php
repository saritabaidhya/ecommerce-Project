@extends('layouts.superAdmin.layout')
@section('content')
@include('layouts.superAdmin.header')
<div class="main main-app p-3 p-lg-4">
<div class="d-flex align-items-center justify-content-between mb-4">
   <div>
      <ol class="breadcrumb fs-sm mb-1">
         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
         <li class="breadcrumb-item active" aria-current="page">Sliders</li>
      </ol>
      <h4 class="main-title mb-0">Sliders</h4>
   </div>
   <nav class="nav nav-icon nav-icon-lg">
   </nav>
</div>
<div class="row g-3 justify-content-center">
   <div class="card card-one mt-3">
      <div class="card-header">
         <h6 class="card-title">Create Slider List</h6>
         <nav class="nav nav-icon nav-icon-sm ms-auto">
            <a href="{{ route('sliders.index')}}" class="btn btn-primary btn-icons"><i class="ri-arrow-left-line me-2"></i> Back</a>
         </nav>
      </div>
      <div class="card-body p-3">
         <form action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
               <div class="col-md-8">
                  <div class="mb-3">
                     <label  class="form-label">Title</label>
                     <input type="text" name="name" class="form-control"  placeholder="Enter Slider name">
                  </div>
                    <div class="mb-3">
                                    <label  class="form-label">Hero Text</label>
                                    <input type="text" name="hero" class="form-control"  placeholder="Enter hero text">
                                  </div>


                                  <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label  class="form-label">Currency</label>
                                            <input type="text" name="currency"  class="form-control"  placeholder="">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label  class="form-label">Amount</label>
                                            <input type="text" name="amount"  class="form-control"  placeholder="">
                                        </div>
                                    </div>

                  <div class="mb-3">
                     <label  class="form-label">Descriptions</label>
                     <textarea id="basic-conf" class="form-control" name="detail" rows="3" placeholder="Write here..."></textarea>
                  </div>
                  <div class="mt-3">
                     <button type="submit" class="btn btn-primary">Create</button>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="mb-3">
                     <label  class="form-label">Status</label>
                     <select class="form-select" name="status" aria-label="Default select example">
                        <option value="1" selected>Active</option>
                        <option value="0">Inactive</option>
                     </select>
                  </div>
                  <div class="mb-3">
                     <label  class="form-label">Featured Image</label>
                     <input class="form-control" type="file"  name="image" accept="image/*">
                     <img src="{{ asset('superAdmin/img/no-image.png') }} " class="img-thumbnail img-fluid mt-2" alt="...">
                  </div>
               </div>
            </div>
         </form>
      </div>
      <!-- card-body -->
   </div>
   <!-- card -->
</div>
<!-- row -->

@if ($message = Session::get('errors'))
<div class="toast-container position-fixed bottom-0 end-0 p-3" id="toastPlacement">
    <div class="toast">
          <div class="toast-header bg-warning">
              <img src="assets/images/logo-sm.png" alt="" height="20" class="me-1">
              <h6 class="me-auto my-0">Whoops! There's a problem</h6>
              <small>0 mins ago</small>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body flex-fill bg-warning bg-opacity-75">
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
          </div>
    </div>
  </div>
  @endif
  @include('layouts.superAdmin.footer')

@endsection