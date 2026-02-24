@extends('layouts.superAdmin.layout')
@section('content')
@include('layouts.superAdmin.header')
<div class="main main-app p-3 p-lg-4">
<div class="d-flex align-items-center justify-content-between mb-4">
   <div>
      <ol class="breadcrumb fs-sm mb-1">
         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
         <li class="breadcrumb-item active" aria-current="page">approachs</li>
      </ol>
      <h4 class="main-title mb-0">approachs</h4>
   </div>
   <nav class="nav nav-icon nav-icon-lg">
   </nav>
</div>
<div class="row g-3 justify-content-center">
   <div class="card card-one mt-3">
      <div class="card-header">
         <h6 class="card-title">approachs List</h6>
         <nav class="nav nav-icon nav-icon-sm ms-auto">
            <a href="{{ route('approaches.index')}}" class="btn btn-primary btn-icons"><i class="ri-arrow-left-line me-2"></i> Back</a>
         </nav>
      </div>
      <div class="card-body p-3">
         <form action="{{ route('approaches.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
               <div class="col-md-8">
                  <div class="mb-3">
                     <label  class="form-label">Title</label>
                     <input type="text" name="name" class="form-control"  placeholder="Enter approach name">
                  </div>
                  <div class="mb-3">
                     <label  class="form-label">detail</label>
                     <input type="text" name="detail" class="form-control"  placeholder="Enter amount">
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                         @php
                             $point = !is_null($point) && is_iterable($point) && count($point) > 0 ? $point : [['title' => '']];
                         @endphp
                        <fieldset class="border  rounded">
                           <h6  class="border-bottom p-2">point</h6>
                           <div class="repeater-default mb-2 p-2">
                               <div data-repeater-list="point">
                                   @foreach ($point as $index => $point)
                                   <div data-repeater-item="">
                                       <div class="form-group row d-flex align-items-end ">
                                           <div class="col-sm-10 mb-2">
                                               <input type="text" name="point[{{ $index }}][title]" class="form-control" placeholder="Title" value="{{ $point['title'] ?? '' }}">
                                           </div>
                                           <div class="col-sm-2 mb-2 ">
                                               <span data-repeater-delete="" class="btn btn-outline-danger form-control">
                                                       <span class="ri-delete-bin-line"></span>
                                               </span>
                                           </div>
                                       </div>
                                   </div>
                                   @endforeach
                               </div>

                               <div class="form-group mt-2 mb-0 row">
                               <div class="col-sm-12">
                                       <span data-repeater-create="" class="btn btn-outline-secondary">
                                           <span class="fas fa-plus"></span> Add
                                       </span>
                               </div><!--end col-->
                               </div><!--end row-->
                           </div> <!--end repeater-->
                       </fieldset>
                     </div>
                     
                  </div>
                  
                  <div class="mt-3">
                     <button type="submit" class="btn btn-primary" id="saveChangesBtn">Create</button>
                     <div id="loadingSpinner" class="spinner-border text-primary d-none" role="status" style="width: 2rem; height: 2rem;">
                         <span class="visually-hidden">Loading...</span>
                     </div>
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
                     <label  class="form-label">Category</label>
                     <select class="form-select" name="category" aria-label="Default select example">
                        <option value="horoscope" selected>horoscope</option>
                        <option value="app">app</option>
                        <option value="marketplace">marketplace</option>
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
  @horoscope('layouts.superAdmin.footer')

@endsection