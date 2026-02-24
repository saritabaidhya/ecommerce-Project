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
         <h6 class="card-title">Slider List</h6>
         <nav class="nav nav-icon nav-icon-sm ms-auto">
            <a href="{{ route('sliders.create')}}" class="btn btn-primary btn-icons"><i class="ri-add-fill"></i> Add
            Slider</a>
         </nav>
      </div>
      <div class="card-body p-3">
         <div class="table-responsive">
            <table  id="datatable-button" class="table table-striped table-bordered " style="border-collapse: collapse; border-spacing: 0;">
                <thead>
                  <tr>
                     <th scope="col">SN</th>
                     <th scope="col">Title </th>
                     <th scope="col">Status</th>
                     <th scope="col">Created At </th>
                     <th scope="col">Updated At</th>
                     <th scope="col">Action </th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($sliders as $slider)
                  <tr>
                     <th scope="row">{{ $loop->iteration }}</th>
                     <td>{{$slider->name}}</td>
                     <td><span class="">{{$slider->status}}</span></td>
                     <td>{{$slider->created_at}}</td>
                     <td>{{$slider->updated_at}}</td>
                     <td>
                        <a href="" class="dropdown-link" data-bs-toggle="dropdown"
                           aria-expanded="false"><i class="ri-more-2-fill"></i></a>
                        <div class="dropdown-menu dropdown-menu-end" style="">
                           <a href="{{ route('sliders.show',$slider->id) }}" data-toggle="modal" class="dropdown-item details"><i
                              class="ri-menu-4-line"></i> View Details</a>
                           <a href="{{ route('sliders.edit',$slider->id) }}" class="dropdown-item rename"><i class="ri-edit-2-line"></i>
                           Edit</a>
                           
                              <a href="#modal-{{$slider->id }}" data-bs-toggle="modal" class="dropdown-item delete"><i
                                 class="ri-delete-bin-line"></i>
                              Delete</a>
                             
                           

                          

                        </div>
                     </td>
                  </tr>

                  <div class="modal fade" id="modal-{{$slider->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header bg-primary">
                          <h5 class="modal-title text-white">Are you Sure ?</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div><!-- modal-header -->
                        <div class="modal-body">
                            <div class="row"> 
                                <div class="col-md-3"> <img src="{{ asset('public/superAdmin/img/93480.png') }}" class="img-fluid"> </div>

                                <div class="col-md-9"><h5>This can't be undone. </h5> You are about to delete the information of <strong> {{$slider->name }} </strong></div>
                            </div>
                            
                        </div><!-- modal-body -->
                        <div class="modal-footers text-end pb-2 pe-4">
                            <form action="{{ route('sliders.destroy',$slider->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </div><!-- modal-footer -->
                      </div><!-- modal-content -->
                    </div><!-- modal-content -->
                  </div><!-- modal -->
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