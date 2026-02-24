@extends('layouts.superAdmin.layout')
@section('content')
@include('layouts.superAdmin.header')
<div class="main main-app p-3 p-lg-4">
<div class="d-flex align-items-center justify-content-between mb-4">
   <div>
      <ol class="breadcrumb fs-sm mb-1">
         <li class="breadcrumb-item"><a href="/dashboards">Dashboard</a></li>
         <li class="breadcrumb-item"><a href="/policies">Privacy policy</a></li>
         <li class="breadcrumb-item active" aria-current="page">{{$policy->name}}</li>
      </ol>
      <h4 class="main-title mb-0">Privacy policy</h4>
   </div>
   <nav class="nav nav-icon nav-icon-lg">
   </nav>
</div>
<div class="row g-3 justify-content-center">
<div class="card card-one mt-3">
   <div class="card-header">
      <h6 class="card-title">Edit Privacy policy</h6>
      <nav class="nav nav-icon nav-icon-sm ms-auto">
         <a href="{{ route('policies.index')}}" class="btn btn-primary btn-icons"><i class="ri-arrow-left-line me-2"></i> Back</a>
      </nav>
   </div>
   <div class="card-body p-3">
      <form action="{{ route('policies.update',$policy->id) }}" method="POST" enctype="multipart/form-data">
         @csrf
         @method('PUT')
         <div class="row">
            <div class="col-md-12">
               <div class="mb-3">
                  <label  class="form-label">Title</label>
                  <input type="text" name="name" value="{{$policy->name}}" class="form-control"  placeholder="Enter  name">
               </div>
              
               <div class="mb-3">
                  <label  class="form-label">Description</label>
                  <textarea id="basic-conf" class="form-control" name="detail" rows="3" placeholder="Write here..."> {{$policy->detail}}</textarea>
               </div>
               <div class="mt-3">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
               </div>
            </div>
            
      </form>
      </div><!-- card-body -->
   </div>
   <!-- card -->
</div>
<!-- row -->
@include('layouts.superAdmin.footer')

@endsection