@extends('layouts.superAdmin.layout')
@section('content')
@include('layouts.superAdmin.header')
<div class="main main-app p-3 p-lg-4">
<div class="d-flex align-items-center justify-content-between mb-4">
   <div>
      <ol class="breadcrumb fs-sm mb-1">
         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
         <li class="breadcrumb-item active" aria-current="page">Pages</li>
      </ol>
      <h4 class="main-title mb-0">Pages</h4>
   </div>
   <nav class="nav nav-icon nav-icon-lg">
   </nav>
</div>
<div class="row g-3 justify-content-center">
   <div class="card card-one mt-3">
      <div class="card-header">
         <h6 class="card-title">Page List</h6>
         <nav class="nav nav-icon nav-icon-sm ms-auto">
            <a href="{{ route('pages.create')}}" class="btn btn-primary btn-icons"><i class="ri-add-fill"></i> Add
            Page</a>
         </nav>
      </div>
      <div class="card-body p-3">
        <div class="table-responsive">
            <table  id="datatable" class="table table-striped table-bordered " style="border-collapse: collapse; border-spacing: 0;">
                <thead>
                  <tr>
                     <th scope="col">SN</th>
                     <th scope="col">Title </th>
                     <th scope="col">Created At </th>
                     <th scope="col">Updated At</th>
                     <th scope="col">Action </th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($pages as $page)
                  <tr>
                     <th scope="row">{{ $loop->iteration }}</th>
                     <td>{{$page->name}}</td>
                     <td>{{$page->created_at}}</td>
                     <td>{{$page->updated_at}}</td>
                     <td>
                        <a href="" class="dropdown-link" data-bs-toggle="dropdown"
                           aria-expanded="false"><i class="ri-more-2-fill"></i></a>
                        <div class="dropdown-menu dropdown-menu-end" style="">
                           <a href="{{ route('pages.show',$page->id) }}" data-toggle="modal" class="dropdown-item details"><i
                              class="ri-menu-4-line"></i> View Details</a>
                           <a href="{{ route('pages.edit',$page->id) }}" class="dropdown-item rename"><i class="ri-edit-2-line"></i>
                           Edit</a>
                           
                            
                           

                          

                        </div>
                     </td>
                  </tr>

                  @endforeach
               </tbody>
            </table>
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