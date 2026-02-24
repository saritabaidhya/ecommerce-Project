@extends('layouts.superAdmin.layout')
@section('content')
@include('layouts.superAdmin.header')
<div class="main main-app p-3 p-lg-4">
<div class="d-flex align-items-center justify-content-between mb-4">
   <div>
      <ol class="breadcrumb fs-sm mb-1">
         <li class="breadcrumb-item"><a href="/dashboards">Dashboard</a></li>
         <li class="breadcrumb-item"><a href="/settings">Settings</a></li>
         <li class="breadcrumb-item active" aria-current="page">{{$setting->first()->name}}</li>
      </ol>
      <h4 class="main-title mb-0">Site Settings</h4>
   </div>
   <nav class="nav nav-icon nav-icon-lg">
   </nav>
</div>
<div class="row g-3 justify-content-center">
<div class="card card-one mt-3">
   <div class="card-header">
      <h6 class="card-title">Edit Settings</h6>
      <nav class="nav nav-icon nav-icon-sm ms-auto">
         <a href="{{ route('settings.index')}}" class="btn btn-primary btn-icons"><i class="ri-arrow-left-line me-2"></i> Back</a>
      </nav>
   </div>
   <div class="card-body p-3">
      <form action="{{ route('settings.update',$setting->id) }}" method="POST" enctype="multipart/form-data">
         @csrf
         @method('PUT')
         <div class="row">
            <div class="col-md-8">
               <div class="mb-3">
                  <label  class="form-label">Name</label>
                  <input type="text" name="name" value="{{$setting->first()->name}}" class="form-control"  placeholder="Enter company name">
               </div>
               <div class="mb-3">
                  <label  class="form-label">Address</label>
                  <input type="text" name="address" value="{{$setting->first()->address}}" class="form-control"  placeholder="Enter full address">
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="mb-3">
                        <label  class="form-label">Phone</label>
                        <input type="text" name="phone" value="{{$setting->first()->phone}}" class="form-control"  placeholder="Enter contact no">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="mb-3">
                        <label  class="form-label">Email</label>
                        <input type="text" name="email" value="{{$setting->first()->email}}" class="form-control"  placeholder="Enter email">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                <label  class="form-label">Website</label>
                <input type="text" name="website" value="{{$setting->first()->website}}" class="form-control"  placeholder="Enter website url">
             </div>
               <div class="mb-3">
                  <label  class="form-label">Descriptions</label>
                  <textarea id="basic-conf" class="form-control" name="detail" rows="3" placeholder="Write here..."> {{$setting->detail}}</textarea>
               </div>
               <div class="mb-3">
                  <label  class="form-label">Title</label>
                  <input type="text" name="title" value="{{$setting->first()->title}}" class="form-control"  placeholder="Enter company title">
               </div>
               <div class="mb-3">
                  <label  class="form-label">Hidden Content</label>
                  <textarea id="basic-confs" class="form-control" name="hidden" rows="3" placeholder="Write here..."> {{$setting->hidden}}</textarea>
               </div>
               <div class="mt-3">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
               </div>
            </div>
            <div class="col-md-4">
               <div class="mb-3">
                  <div class="mb-3">
                     <label  class="form-label">Featured Image 
</label>
                     <input class="form-control" type="file"  name="image" accept="image/*">
                     @if ($setting->path)
                     <img src="{{ asset('storage/images/' . $setting->first()->path) }}" alt="Current Image" class="img-thumbnail mt-3" >
                     @endif
                  </div>
               </div>
                <div class="mb-3">
                <label  class="form-label">Working Hours</label>
                <input type="text" name="duration" value="{{$setting->first()->duration}}" class="form-control"  placeholder="Enter working hours">
             </div>

               <div class="mb-3">
                <label  class="form-label">Meta Keywords ( Add , after word )</label>
                <input type="text" name="meta_keyword" value="{{$setting->first()->meta_keyword}}" class="form-control"  placeholder="Enter meta keywords">
             </div>

             <div class="mb-3">
                <label  class="form-label">Meta Descriptions</label>
                <textarea  class="form-control" name="meta_description" rows="3" placeholder="Write here..."> {{$setting->first()->meta_description}}</textarea>
             </div>
             <div class="mb-3">
                <label  class="form-label">Embed Google Map Link</label>
                <input type="text" name="map" value="{{$setting->first()->map}}" class="form-control"  placeholder="Enter google map url">
             </div>

             <h5> Social Links </h5>

             <div class="mb-3">
                <label  class="form-label">Facebook Page</label>
                <input type="text" name="facebook" value="{{$setting->first()->facebook}}" class="form-control"  placeholder="Enter facebook url">
             </div>

             <div class="mb-3">
                <label  class="form-label">Instagram Page</label>
                <input type="text" name="instagram" value="{{$setting->first()->instagram}}" class="form-control"  placeholder="Enter instragram url">
             </div>

             <div class="mb-3">
                <label  class="form-label">Youtube Page</label>
                <input type="text" name="youtube" value="{{$setting->first()->youtube}}" class="form-control"  placeholder="Enter youtube url">
             </div>

             
            </div>
      </form>
      </div><!-- card-body -->
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