@extends('layouts.superAdmin.layout')

@section('content')
    @include('layouts.superAdmin.header')
    <div class="main main-app p-3 p-lg-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <ol class="breadcrumb fs-sm mb-1">
                    <li class="breadcrumb-item"><a href="/dashboards">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Offering</li>
                </ol>
                <h4 class="main-title mb-0">Offerings</h4>
            </div>
            <nav class="nav nav-icon nav-icon-lg">

            </nav>
        </div>

        <div class="row g-3 justify-content-center">
            <div class="card card-one mt-3">
                <div class="card-header">
                    <h6 class="card-title">Edit service</h6>
                    <nav class="nav nav-icon nav-icon-sm ms-auto">
                        <a href="{{ route('offerings.index')}}" class="btn btn-primary btn-icons"><i class="ri-arrow-left-line me-2"></i> Back</a>

                    </nav>
                </div>
                <div class="card-body p-3">
                    <form action="{{ route('offerings.update',$offering->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row"> 
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label  class="form-label">Title</label>
                                    <input type="text" name="name" value="{{$offering->name}}" class="form-control"  placeholder="Enter offering name">
                                  </div>  
                                  <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label  class="form-label">Unit</label>
                                        <select name="unit" id="" class="form-select">
                                          <option value="Liters" {{ $offering->unit  == 'Liters' ? 'selected' : '' }}>Liters</option>
                                          <option value="Bowl"{{ $offering->unit  == 'Bowl' ? 'selected' : '' }} >Bowl</option>
                                          <option value="200 Gram" {{ $offering->unit  == '200 Gram' ? 'selected' : '' }}>200 Gram</option>
                                          <option value="50 Gram" {{ $offering->unit  == '50 Gram' ? 'selected' : '' }}>50 Gram</option>
                                          <option value="Pieces" {{ $offering->unit  == 'Pieces' ? 'selected' : '' }}>Pieces</option>
                                          <option value="Kg" {{ $offering->unit  == 'Kg' ? 'selected' : '' }}>Kg</option>
                                          <option value="Packets" {{ $offering->unit  == 'Packets' ? 'selected' : '' }}>Packets</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label  class="form-label">Priority</label>
                                        <input type="text" name="priority" value="{{$offering->priority}}" class="form-control"  placeholder="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label  class="form-label">Price</label>
                                        <input type="text" name="price" value="{{$offering->price}}" class="form-control"  placeholder="">
                                    </div>
                                    {{-- <div class="col-md-6 mb-3">
                                        <label  class="form-label">Currency</label>
                                        <select name="currency" class="form-select" id="">
                                          <option value="USD"  {{ $offering->currency  == 'USD' ? 'selected' : '' }}>USD</option>
                                          <option value="NPR"  {{ $offering->currency  == 'NPR' ? 'selected' : '' }}>NPR</option>
                                        </select>
                                    </div>                      --}}
                                  </div> 
                                  
                                

                                  {{-- <div class="mb-3">
                                    <label  class="form-label">Descriptions</label>
                                    <textarea id="basic-conf" class="form-control" name="detail" rows="3" placeholder="Write here..."> {{$offering->detail}}</textarea>
                                  </div> --}}

                                  <div class="mt-3">
                                    <button type="submit" class="btn btn-primary" id="saveChangesBtn">Save Changes</button>
                                    <div id="loadingSpinner" class="spinner-border text-primary d-none" role="status" style="width: 2rem; height: 2rem;">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                                  
                                  
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                <label  class="form-label">Status</label>
                                <select class="form-select" name="status" aria-label="Default select example">
                                    <option value="1" {{ $offering->status  == '1' ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $offering->status  == '0' ? 'selected' : '' }}>Inactive</option>
                                  </select>
                                </div>

                              

                              
                                <div class="mb-3">
                                    <label  class="form-label">Featured Image</label>
                                    <input class="form-control" type="file"  name="image" accept="image/*">
                                    @if ($offering->path)
                                    <img src="{{ asset('storage/images/' . $offering->path) }}" alt="Current Image" class="img-thumbnail mt-3" >
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
