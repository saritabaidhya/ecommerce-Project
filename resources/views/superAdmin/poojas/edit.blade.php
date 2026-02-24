@extends('layouts.superAdmin.layout') @section('content') @include('layouts.superAdmin.header') <div class="main main-app p-3 p-lg-4">
  <div class="d-flex align-items-center justify-content-between mb-4">
    <div>
      <ol class="breadcrumb fs-sm mb-1">
        <li class="breadcrumb-item">
          <a href="/dashboards">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
          <a href="/utilities">Services</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">{{$utility->name}}</li>
      </ol>
      <h4 class="main-title mb-0">Services</h4>
    </div>
    <nav class="nav nav-icon nav-icon-lg"></nav>
  </div>
  <div class="row g-3 justify-content-center">
    <div class="card card-one mt-3">
      <div class="card-header">
        <h6 class="card-title">Edit service</h6>
        <nav class="nav nav-icon nav-icon-sm ms-auto">
          <a href="{{ route('utilities.index')}}" class="btn btn-primary btn-icons">
            <i class="ri-arrow-left-line me-2"></i> Back </a>
        </nav>
      </div>
      <div class="card-body p-3">
        <form action="{{ route('utilities.update',$utility->id) }}" method="POST" enctype="multipart/form-data"> @csrf @method('PUT') <div class="row">
            <div class="col-md-8">
              <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" value="{{$utility->name}}" class="form-control" placeholder="Enter service name">
              </div>
              <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" value="{{$utility->title}}" class="form-control" placeholder="Enter service name">
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Category</label>
                    <select class="form-select" name="category" aria-label="Default select example">
                       @foreach ($utilitytypes as $utilitytype) 
                        <option value="{{ $utilitytype->id }}" {{ $utility->category == $utilitytype->id ? 'selected' : '' }}> {{ $utilitytype->name }}
                      </option> @endforeach </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Type</label>
                     <select class="form-select" name="type" aria-label="Default select example">
                        <option value="god" {{ $utility->type == 'god' ? 'selected' : '' }}>By God</option>
                        <option value="temple" {{ $utility->type == 'temple' ? 'selected' : '' }}>By Temple</option> 
                        <option value="spiritual" {{ $utility->type == 'spiritual' ? 'selected' : '' }}>Spiritual Yatra</option>
                        <option value="dosh" {{ $utility->type == 'dosh' ? 'selected' : '' }}>Dosh Nivaran</option>
                     </select>
                  </div>
                </div>
              </div>
               <div class="mb-3">
                <label class="form-label">Available Offerings</label>
                  <select id="select2D" name="offerings[]" class="form-select" multiple>
                      <option value="all">All</option> <!-- Special 'All' option -->
                      @foreach ($offerings as $offering)
                          <option value="{{ $offering->name }}" 
                              @if(in_array($offering->name, $selectedOfferings)) selected @endif>
                              {{ $offering->name }}
                          </option>
                      @endforeach
                  </select>

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
                
              </div> 
              
              <div class="mb-3">
                <label class="form-label">Hero Content (2 Lines Only)</label>
                <textarea class="form-control" name="hero" rows="2" placeholder="Write here...">{{$utility->hero}}</textarea>
              </div>
              <div class="mb-3">
                <label class="form-label">Descriptions</label>
                <textarea id="basic-conf" class="form-control" name="detail" rows="3" placeholder="Write here..."> {{$utility->detail}}</textarea>
              </div>
              <div class="mb-3">
                <label class="form-label">purpose</label>
                <textarea  class="form-control" name="purpose" rows="3" placeholder="Write here..."> {{$utility->purpose}}</textarea>
              </div>              
              @php $benefit = (!is_null($benefit) && is_iterable($benefit) && count($benefit) > 0) ? $benefit : [['title' => '']]; @endphp 
              <fieldset>
              <h5 class="my-2">Benefits</h5>
              <div class="repeater-default mb-2 mt-2">
                <div data-repeater-list="benefit">
                  @foreach ($benefit as $index => $benefit) 
                  <div data-repeater-item="">
                    <div class="form-group row d-flex align-items-end">
                      <div class="col-sm-11 mb-2">
                        <input type="text" required  name="benefit[{{ $index }}][title]" class="form-control" placeholder="Title" value="{{ $benefit['title'] }}">
                      </div>
                      <!--end col-->
                      <div class="col-sm-1 mb-2">
                        <span data-repeater-delete="" class="btn btn-outline-danger">
                          <span class="ri ri-delete-bin-line me-1"></span>
                        </span>
                      </div>
                      <!--end col-->
                      
                      <!--end col-->
                      
                    </div>
                    <!--end row-->
                  </div>
                  <!--end /div--> @endforeach
                </div>
                <!--end repet-list-->
                <div class="form-group mb-0 mt-2 row">
                  <div class="col-sm-12">
                    <span data-repeater-create="" class="btn btn-outline-secondary">
                      <span class="fas fa-plus"></span>
                      <span class="ri ri-add-fill me-1"></span> Add </span>
                  </div>
                  <!--end col-->
                </div>
                <!--end row-->
              </div>


             





              
              <!--end repeater-->
            </fieldset>
              

              
              
              <div class="mt-3">
                <button type="submit" class="btn btn-primary" id="saveChangesBtn">Save Changes</button>
                <div id="loadingSpinner" class="spinner-border text-primary d-none" role="status" style="width: 2rem; height: 2rem;">
                  <span class="visually-hidden">Loading...</span>
                </div>
              </div>
            </div>


            <div class="col-md-4">
              <div class="mb-3">
                <label class="form-label">Status</label>
                <select class="form-select" name="status" aria-label="Default select example">
                  <option value="1" {{ $utility->status == '1' ? 'selected' : '' }}>Active</option>
                  <option value="0" {{ $utility->status == '0' ? 'selected' : '' }}>Inactive</option>
                </select>
              </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="form-label">Actual price</label>
                      <input type="text" required name="price"  value="{{$utility->price}}" class="form-control"  >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="form-label">offer Price {{ $utility->utilitytype->name }} </label>
                      <input type="text" required name="offprice"  value="{{$utility->offprice}}" class="form-control" >
                    </div>
                  </div>
                </div>
                <div class="col-md-12">

                  @if( $utility->utilitytype->name =="Pooja")
                    @php
                      $unitprice = !is_null($unitprice) && is_iterable($unitprice) && count($unitprice) > 0 ? $unitprice : [['title' => ''],['price' => '']];
                    @endphp
                  <fieldset class="border  rounded">
                      <h6  class="border-bottom p-2">Unit Prices</h6>
                      <div class="repeater-default mb-2 p-2">
                          <div data-repeater-list="unitprice">
                              @foreach ($unitprice as $index => $unitprice)                         
                              <div data-repeater-item="">
                                
                                  <div class="form-group row d-flex align-items-end ">
                                      <div class="col-sm-5 mb-2">
                                        <select name="unitprice[{{ $index }}][title]" class="form-select">
                                            @foreach ($packages as $package)
                                                <option value="{{ $package->name }}" 
                                                    @if(isset($unitprice['title']) && $unitprice['title'] === $package->name) selected @endif>
                                                    {{ $package->name }}
                                                </option>
                                            @endforeach
                                        </select>

                                          {{-- <input type="text" name="unitprice[{{ $index }}][title]" class="form-control" placeholder="unit" value="{{ $unitprice['title'] ?? '' }}"> --}}
                                      </div>
                                      <div class="col-sm-5 mb-2">
                                          <input type="text" required  name="unitprice[{{ $index }}][price]" class="form-control" placeholder="price" value="{{ $unitprice['price'] ?? '' }}">
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
                  @endif

                  @if( $utility->utilitytype->name =="Astrology")
                    @php
                      $unitprice = !is_null($unitprice) && is_iterable($unitprice) && count($unitprice) > 0 ? $unitprice : [['title' => ''],['price' => '']];
                    @endphp
                  <fieldset class="border  rounded">
                      <h6  class="border-bottom p-2">Choose Astrology</h6>
                      <div class="repeater-default mb-2 p-2">
                          <div data-repeater-list="unitprice">
                              @foreach ($unitprice as $index => $unitprice)                         
                              <div data-repeater-item="">
                                
                                  <div class="form-group row d-flex align-items-end ">
                                      <div class="col-sm-5 mb-2">
                                        <select name="unitprice[{{ $index }}][title]" class="form-select">
                                            @foreach ($teams as $package)
                                                <option value="{{ $package->name }}" 
                                                    @if(isset($unitprice['title']) && $unitprice['title'] === $package->name) selected @endif>
                                                    {{ $package->name }}
                                                </option>
                                            @endforeach
                                        </select>

                                          {{-- <input type="text" name="unitprice[{{ $index }}][title]" class="form-control" placeholder="unit" value="{{ $unitprice['title'] ?? '' }}"> --}}
                                      </div>
                                      <div class="col-sm-5 mb-2">
                                          <input type="text" required name="unitprice[{{ $index }}][price]" class="form-control" placeholder="price" value="{{ $unitprice['price'] ?? '' }}">
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
                  @endif
                </div>
              <div class="mb-3">
                <label class="form-label">Featured Image</label>
                <input class="form-control" type="file" name="image" accept="image/*"> @if ($utility->path) <img src="{{ asset('storage/images/' . $utility->path) }}" alt="Current Image" class="img-thumbnail mt-3"> @endif
              </div>
              <div class="mb-3">
                <label class="form-label">Meta Keywords ( Add , after word )</label>
                <input type="text" name="meta_keyword" class="form-control" value="{{$utility->meta_keyword}}" placeholder="Enter meta keywords">
              </div>
              <div class="mb-3">
                <label class="form-label">Meta Descriptions</label>
                <textarea class="form-control" name="meta_description" rows="3" placeholder="Write here..."> {{$utility->meta_description}}</textarea>
              </div>
            </div>
          </div>
        </form>
      </div>
      <!-- card-body -->
    </div>
    <!-- card -->
  </div>
  <!-- row --> @if ($message = Session::get('errors')) <div class="toast-container position-fixed bottom-0 end-0 p-3" id="toastPlacement">
    <div class="toast">
      <div class="toast-header bg-warning">
        <img src="assets/images/logo-sm.png" alt="" height="20" class="me-1">
        <h6 class="me-auto my-0">Whoops! There's a problem</h6>
        <small>0 mins ago</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body flex-fill bg-warning bg-opacity-75"> @foreach ($errors->all() as $error) <p>{{ $error }}</p> @endforeach </div>
    </div>
  </div> @endif @include('layouts.superAdmin.footer') @endsection
  