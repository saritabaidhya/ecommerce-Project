@extends('layouts.superAdmin.layout')

@section('content')
    @include('layouts.superAdmin.header')
    <div class="main main-app p-3 p-lg-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <ol class="breadcrumb fs-sm mb-1">
                    <li class="breadcrumb-item"><a href="/dashboards">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/triumphtypes">Success Story</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$triumph->name}}</li>
                </ol>
                <h4 class="main-title mb-0">Success Story</h4>
            </div>
            <nav class="nav nav-icon nav-icon-lg">

            </nav>
        </div>

        <div class="row g-3 justify-content-center">
            <div class="card card-one mt-3">
                <div class="card-header">
                    <h6 class="card-title">Edit Success Story</h6>
                    <nav class="nav nav-icon nav-icon-sm ms-auto">
                        <a href="{{ route('triumphs.index')}}" class="btn btn-primary btn-icons"><i class="ri-arrow-left-line me-2"></i> Back</a>

                    </nav>
                </div>
                <div class="card-body p-3">
                    <form action="{{ route('triumphs.update',$triumph->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row"> 
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label  class="form-label">Title</label>
                                    <input type="text" name="name" value="{{$triumph->name}}" class="form-control"  placeholder="Enter triumph name">
                                  </div>  
 <div class="row"> 
                     <div class="col-md-6">
                     <div class="mb-3">
                     <label  class="form-label">Designation</label>
                     <input type="text" name="designation" value="{{$triumph->designation}}" class="form-control"  placeholder="Enter student designation">
                  </div>   
                     </div>
                     <div class="col-md-6">
                     <div class="mb-3">
                     <label  class="form-label">Company</label>
                     <input type="text" name="company" class="form-control" value="{{$triumph->company}}"  placeholder="Enter company">
                  </div>   
                     </div>
                      <div class="col-md-12">
                     <div class="mb-3">
                     <label  class="form-label">Name of College / Institute</label>
                     <input type="text" name="institute" class="form-control" value="{{$triumph->institute}}"  placeholder="Enter College / Institute">
                  </div>   
                     </div>
                  </div>
                                  
                                  <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                <label  class="form-label">Status</label>
                                <select class="form-select" name="status" aria-label="Default select example">
                                    <option value="1" {{ $triumph->status  == '1' ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $triumph->status  == '0' ? 'selected' : '' }}>Inactive</option>
                                  </select>
                                </div>

                              
                                <div class="mb-3">
                                    <label  class="form-label">Featured Image</label>
                                    <input class="form-control" type="file"  name="image" accept="image/*">
                                    @if ($triumph->path)
                                    <img src="{{ asset('storage/images/' . $triumph->path) }}" alt="Current Image" class="img-thumbnail mt-3" >
                                @endif
                                </div>

                                
                            </div>   
                        </div>
                        

                         

                    
                    </form>
                </div><!-- card-body -->
            </div><!-- card -->

        </div><!-- row -->

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
