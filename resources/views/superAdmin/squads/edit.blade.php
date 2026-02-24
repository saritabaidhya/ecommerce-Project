@extends('layouts.superAdmin.layout')

@section('content')
    @include('layouts.superAdmin.header')
    <div class="main main-app p-3 p-lg-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <ol class="breadcrumb fs-sm mb-1">
                    <li class="breadcrumb-item"><a href="/dashboards">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/squadtypes">Team</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$squad->name}}</li>
                </ol>
                <h4 class="main-title mb-0">Team</h4>
            </div>
            <nav class="nav nav-icon nav-icon-lg">

            </nav>
        </div>

        <div class="row g-3 justify-content-center">
            <div class="card card-one mt-3">
                <div class="card-header">
                    <h6 class="card-title">Edit service</h6>
                    <nav class="nav nav-icon nav-icon-sm ms-auto">
                        <a href="{{ route('squads.index')}}" class="btn btn-primary btn-icons"><i class="ri-arrow-left-line me-2"></i> Back</a>

                    </nav>
                </div>
                <div class="card-body p-3">
                    <form action="{{ route('squads.update',$squad->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row"> 
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label  class="form-label">Title</label>
                                    <input type="text" name="name" value="{{$squad->name}}" class="form-control"  placeholder="Enter squad name">
                                  </div>  
                                  <div class="row">
                                    {{-- <div class="col-md-6 mb-3">
                                        <label  class="form-label">Slug</label>
                                        <input type="text" name="slug" value="{{$squad->slug}}" class="form-control"  placeholder="Enter squad name">
                                    </div>   --}}
                                    <div class="col-md-12  mb-3">
                                        <label  class="form-label">Expertise</label>
                                        <select class="form-select" name="expertise" aria-label="Default select example">
                                            <option value="Astrologer" {{ $squad->expertise  == 'Astrologer' ? 'selected' : '' }}>Astrologer</option>
                                            <option value="Pandit" {{ $squad->expertise  == 'Pandit' ? 'selected' : '' }}>Pandit</option>
                                        </select>
                                    </div>
                                  </div>

                                   <div class="mb-3">
                                        <label class="form-label">Available Services</label>
                                        <select id="select2D" name="services[]" class="form-select" multiple>
                                            <option value="all">All</option> <!-- Special 'All' option -->
                                            @foreach ($services as $services)
                                                <option value="{{ $services->name }}" 
                                                    @if(in_array($services->name, $selectedServices)) selected @endif>
                                                    {{ $services->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div> 
                                    <script>
                                        document.addEventListener('DOMContentLoaded', function () {
                                            const select = document.getElementById('select2D');

                                            select.addEventListener('change', function () {
                                                const selectedValues = Array.from(select.selectedOptions).map(opt => opt.value);
                                                const allSelected = selectedValues.includes('all');

                                                if (allSelected) {
                                                    // Select all actual offerings and deselect 'all'
                                                    Array.from(select.options).forEach(option => {
                                                        if (option.value !== 'all') {
                                                            option.selected = true;
                                                        } else {
                                                            option.selected = false; // remove 'all'
                                                        }
                                                    }
                                                );
                                            });
                                        });
                                    </script>
                                  

                                  <div class="mb-3">
                                    <label  class="form-label">Descriptions</label>
                                    <textarea id="basic-conf" class="form-control" name="detail" rows="3" placeholder="Write here..."> {{$squad->detail}}</textarea>
                                  </div>
                                  
                                  <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                <label  class="form-label">Status</label>
                                <select class="form-select" name="status" aria-label="Default select example">
                                    <option value="1" {{ $squad->status  == '1' ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $squad->status  == '0' ? 'selected' : '' }}>Inactive</option>
                                  </select>
                                </div>

                               <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label  class="form-label">Designation</label>
                                        <input type="text" name="designation" value="{{$squad->designation}}" class="form-control"  placeholder="Enter designation">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label  class="form-label">Experience</label>
                                        <input type="text" name="experience" value="{{$squad->experience}}" class="form-control"  placeholder="Exp Years">
                                    </div>
                    
                                    <div class="col-md-6 mb-3">
                                        <label  class="form-label">Availability</label>
                                        <input type="text" name="availability" value="{{$squad->availability}}" class="form-control"  placeholder="Availability">
                                    </div>
                                    
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Featured Image</label>
                                    <input class="form-control" type="file"  name="image" accept="image/*">
                                    @if ($squad->path)
                                    <img src="{{ asset('storage/images/' . $squad->path) }}" alt="Current Image" class="img-thumbnail mt-3" >
                                @endif
                                </div>

                               

                    
                                 <div class="mb-3">
                                    <label  class="form-label">Meta Descriptions</label>
                                    <input type="text" name="facebook"  class="form-control" value="{{$squad->facebook}}"  placeholder="Enter facebook profile link">
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
