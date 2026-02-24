@extends('layouts.superAdmin.layout')
@section('content')
@include('layouts.superAdmin.header')
<div class="main main-app p-3 p-lg-4">
<div class="d-flex align-items-center justify-content-between mb-4">
   <div>
      <ol class="breadcrumb fs-sm mb-1">
         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
         <li class="breadcrumb-item active" aria-current="page">Services</li>
      </ol>
      <h4 class="main-title mb-0">Services</h4>
   </div>
   <nav class="nav nav-icon nav-icon-lg">
   </nav>
</div>
<div class="row g-3 justify-content-center">
   <div class="card card-one mt-3">
      <div class="card-header">
         <h6 class="card-title">Service List</h6>
         <nav class="nav nav-icon nav-icon-sm ms-auto">
            <a href="{{ route('utilities.create')}}" class="btn btn-primary btn-icons"><i class="ri-add-fill"></i> Add
            Service</a>
         </nav>
      </div>
      <div class="card-body p-3">
          <div class="table-responsive">
            <table  id="datatable" class="table table-striped table-bordered " style="border-collapse: collapse; border-spacing: 0;">
                <thead>
                  <tr>
                     <th scope="col">SN</th>
                     <th scope="col">Title </th>
                     <th scope="col">Category</th>
                     <th scope="col">Subcategory</th>
                     <th scope="col">Status</th>
                     <th scope="col">IS  Featured </th>
                     <th scope="col">On Sale</th>
                     <th scope="col">Created At</th>
                     <th scope="col">Action </th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($utilities as $utility)
                  <tr>
                     <th scope="row">{{ $loop->iteration }}</th>
                     <td>{{$utility->name}}</td>
                     {{-- <td>
                        @foreach ($utilitytypes as $utilitytype)
                           @if ($utility->category == $utilitytype->id)
                                 {{ $utilitytype->name }}
                           @endif
                        @endforeach
                     </td>
                     <td>
                        @foreach ($utilitysubtypes as $utilitysubtype)
                           @if ($utility->subcategory == $utilitysubtype->id)
                                 {{ $utilitysubtype->name }}
                           @endif
                        @endforeach
                     </td> --}}
                     <td>{{ $utility->utilitytype?->name }}</td>
                     <td>{{ $utility->utilitysubtype?->name }}</td>

                     <td>
                        <div class="form-check form-switch">
                           <input class="form-check-input" disabled type="checkbox" name="status"  value="{{$utility->status}}" role="switch"  id="flexSwitchCheck{{$utility->id}}" 
                                    @if($utility->status) checked @endif >
                        </div>
                     </td>
                     <td>{{$utility->featured}}</td>
                     <td>{{$utility->onsale}}</td>
                     <td>{{$utility->created_at}}</td>
                     <td>
                        <a href="" class="dropdown-link" data-bs-toggle="dropdown"
                           aria-expanded="false"><i class="ri-more-2-fill"></i></a>
                        <div class="dropdown-menu dropdown-menu-end" style="">
                           <a href="{{ route('utilities.show',$utility->id) }}" data-toggle="modal" class="dropdown-item details"><i
                              class="ri-menu-4-line"></i> View Details</a>
                           <a href="{{ route('utilities.edit',$utility->id) }}" class="dropdown-item rename"><i class="ri-edit-2-line"></i>
                           Edit</a>
                           
                              <a href="#modal-{{$utility->id }}" data-bs-toggle="modal" class="dropdown-item delete"><i
                                 class="ri-delete-bin-line"></i>
                              Delete</a>
                            
                           

                          

                        </div>
                     </td>
                  </tr>

                  <div class="modal fade" id="modal-{{$utility->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header bg-primary">
                          <h5 class="modal-title text-white">Are you Sure ?</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div><!-- modal-header -->
                        <div class="modal-body">
                            <div class="row"> 
                                <div class="col-md-3"> <img src="{{ asset('public/superAdmin/img/93480.png') }}" class="img-fluid"> </div>

                                <div class="col-md-9"><h5>This can't be undone. </h5> You are about to delete the information of <strong> {{$utility->name }}</strong> </div>
                            </div>
                            
                        </div><!-- modal-body -->
                        <div class="modal-footers text-end pb-2 pe-4">
                            <form action="{{ route('utilities.destroy',$utility->id) }}" method="POST">
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