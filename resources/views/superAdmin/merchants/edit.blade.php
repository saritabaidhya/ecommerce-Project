@extends('layouts.superAdmin.layout')

@section('content')
    @include('layouts.superAdmin.header')
    <div class="main main-app p-3 p-lg-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <ol class="breadcrumb fs-sm mb-1">
                    <li class="breadcrumb-item"><a href="/dashboards">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/associatetypes">Tradie</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$merchant->name}}</li>
                </ol>
                <h4 class="main-title mb-0">Tradie</h4>
            </div>
            <nav class="nav nav-icon nav-icon-lg">

            </nav>
        </div>

        <div class="row g-3 justify-content-center">
            <div class="card card-one mt-3">
                <div class="card-header">
                    <h6 class="card-title">Edit contact</h6>
                    <nav class="nav nav-icon nav-icon-sm ms-auto">
                        <a href="{{ route('lists.index')}}" class="btn btn-primary btn-icons"><i class="ri-arrow-left-line me-2"></i> Back</a>

                    </nav>
                </div>
                <div class="card-body p-3">
                    <form action="{{ route('merchants.update',$merchant->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row"> 
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label  class="form-label">Title</label>
                                    <input type="text" name="name" value="{{$merchant->name}}" class="form-control"  placeholder="Enter business name">
                                  </div>
                                  
                                  <div class="mb-3">
                                    <label  class="form-label">Service(s)</label>
                                    <select id="select2D" class="form-select" name="service[]" multiple>
    @foreach ($utilities as $utility)
        <option value="{{ $utility->id }}"
            {{ in_array($utility->id, $merchant->service ?? []) ? 'selected' : '' }}>
            {{ $utility->name }}
        </option>
    @endforeach
</select>

                                    <!--<input type="text" name="service" value="{{ is_array($merchant->service) ? implode(', ', $merchant->service) : $merchant->service }}" class="form-control"  placeholder="Enter business services">-->
                                  </div>
                                  
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="mb-3">
                                    <label  class="form-label">Phone</label>
                                    <input type="text" name="phone" value="{{$merchant->phone}}" class="form-control"  placeholder="Enter contact no.">
                                  </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="mb-3">
                                    <label  class="form-label">Email</label>
                                    <input type="text" name="email" value="{{$merchant->email}}" class="form-control"  placeholder="Enter email address">
                                  </div>
                                      </div>
                                       <div class="col-md-12">
                                          <div class="mb-3">
                                    <label  class="form-label">Address</label>
                                    <input type="text" name="address" value="{{$merchant->address}}" class="form-control"  placeholder="Enter address">
                                  </div>
                                      </div>
                                  </div>

                                  <div class="mb-3">
                                    <label  class="form-label">Descriptions</label>
                                    <textarea id="basic-conf" class="form-control" name="detail" rows="3" placeholder="Write here..."> {{$merchant->detail}}</textarea>
                                  </div>
                                  
                                  <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                  </div>
                            </div>
                            <div class="col-md-4">
<div class="mb-3">
    <label class="form-label">Status</label>
    <select class="form-select" name="status" aria-label="Default select example" >
        <option value="1" {{ $merchant->status == '1' ? 'selected' : '' }}>OnBoard</option>
        <option value="2" {{ $merchant->status == '2' ? 'selected' : '' }}>OnHold</option>
        <option value="3" {{ $merchant->status == '3' ? 'selected' : '' }}>BlackListed</option>
    </select>
</div>


                                
                                <div class="mb-3">
                                    <label  class="form-label">Suburb</label>
                                    <input type="text" name="suburb" value="{{$merchant->suburb}}" class="form-control"  placeholder="Enter business suburb">
                                  </div>
                                  <div class="mb-3">
                                    <label  class="form-label">Website</label>
                                    <input type="text" name="website" value="{{$merchant->website}}" class="form-control"  placeholder="Enter business website url">
                                  </div>
                                  
                                  <div class="mb-3">
                                    <label  class="form-label">Fav Icon</label>
                                    <input class="form-control" type="file"  name="fav" accept="image/*">
                                    @if ($merchant->fav)
                                    <img src="{{ asset('storage/app/public/attach/' . $merchant->fav) }}" alt="Current Image" class="img-thumbnail mt-3" >
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
