@extends('layouts.superAdmin.layout') @section('content') @include('layouts.superAdmin.header') <div class="main main-app p-3 p-lg-4">
  <div class="d-flex align-items-center justify-content-between mb-4">
    <div>
      <ol class="breadcrumb fs-sm mb-1">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Services</li>
      </ol>
      <h4 class="main-title mb-0">Services</h4>
    </div>
    <nav class="nav nav-icon nav-icon-lg"></nav>
  </div>
  <div class="row g-3 justify-content-center">
    <div class="card card-one mt-3">
      <div class="card-header">
        <h6 class="card-title">Create service List</h6>
        <nav class="nav nav-icon nav-icon-sm ms-auto">
          <a href="{{ route('utilities.index')}}" class="btn btn-primary btn-icons">
            <i class="ri-arrow-left-line me-2"></i> Back </a>
        </nav>
      </div>
      <div class="card-body p-3">
        <form action="{{ route('utilities.store') }}" method="POST" enctype="multipart/form-data"> @csrf <div class="row">
            <div class="col-md-8">
              <div class="mb-3">
                <label class="form-label">Service Name</label>
                <input type="text" required name="name" class="form-control" placeholder="Enter Service name">
              </div>
              
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Category</label>
                    <select class="form-select" name="category" id="categorySelect" aria-label="Default select example">
                      @foreach ($utilitytypes as $utilitytype) 
                      <option value="{{ $utilitytype->id }}" > 
                        {{ $utilitytype->name }}
                      </option> 
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Subcategory</label>
                    <select class="form-select" name="subcategory"  aria-label="Default select example">
                      @foreach ($utilitysubtypes as $utilitysubtype) 
                      <option value="{{ $utilitysubtype->id }}" > 
                        {{ $utilitysubtype->name }}
                      </option> 
                      @endforeach
                    </select>
                  </div>
                </div>
                 
              </div>
              <div class="mb-3">
                <label class="form-label">Hero Content</label>
                <textarea class="form-control" name="hero" rows="2" placeholder="Write here..."></textarea>
              </div>
             
              <div class="mb-3">
                <label class="form-label">Descriptions</label>
                <textarea id="basic-conf" class="form-control" name="detail" rows="2" placeholder="Write here..."></textarea>
              </div>


              @php
                    $variant = !is_null($variant) && is_iterable($variant) && count($variant) > 0 ? $variant : [['size' => '','color' => '','stock' => '','price' => '',]];
                @endphp
              <fieldset class="border  rounded mb-3">
                  <h6  class="border-bottom p-2">Product Variants</h6>
                  <div class="repeater-default mb-2 p-2">
                      <div data-repeater-list="benefit">
                          @foreach ($variant as $index => $variant)
                          <div data-repeater-item="">
                              <div class="form-group row d-flex align-items-end ">
                                  <div class="col-sm-3 mb-2">
                                      <input type="text" name="benefit[{{ $index }}][size]" class="form-control" placeholder="size" value="{{ $variant['size'] ?? '' }}">
                                  </div>
                                   <div class="col-sm-3 mb-2">
                                      <input type="text" name="benefit[{{ $index }}][color]" class="form-control" placeholder="color" value="{{ $variant['color'] ?? '' }}">
                                  </div>
                                  <div class="col-sm-2 mb-2">
                                      <input type="text" name="benefit[{{ $index }}][stock]" class="form-control" placeholder="stock" value="{{ $variant['stock'] ?? '' }}">
                                  </div>
                                   <div class="col-sm-2 mb-2">
                                      <input type="text" name="benefit[{{ $index }}][price]" class="form-control" placeholder="price" value="{{ $variant['price'] ?? '' }}">
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



         

            <div class="mb-3">
              <label class="form-label">Media Images (1:1)</label>
              <input type="file" name="photo[]" id="photo" class="form-control" accept="image/*" multiple>
              <img src="{{ asset('superAdmin/img/no-image.png') }} " class="img-thumbnail img-fluid mt-2" alt="...">
            </div>

              <div class="mb-3">
                <label class="form-label">Purpose</label>
                <textarea  class="form-control" name="purpose" rows="3" placeholder="Write here..."></textarea>
              </div>
                @php
                    $benefit = !is_null($benefit) && is_iterable($benefit) && count($benefit) > 0 ? $benefit : [['title' => '','detail' => '']];
                @endphp
              <fieldset class="border  rounded">
                  <h6  class="border-bottom p-2">Specification</h6>
                  <div class="repeater-default mb-2 p-2">
                      <div data-repeater-list="benefit">
                          @foreach ($benefit as $index => $benefit)
                          <div data-repeater-item="">
                              <div class="form-group row d-flex align-items-end ">
                                  <div class="col-sm-5 mb-2">
                                      <input type="text" name="benefit[{{ $index }}][title]" class="form-control" placeholder="Title" value="{{ $benefit['title'] ?? '' }}">
                                  </div>
                                   <div class="col-sm-5 mb-2">
                                      <input type="text" name="benefit[{{ $index }}][detail]" class="form-control" placeholder="Detail" value="{{ $benefit['detail'] ?? '' }}">
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
              
              
              <div class="mt-3">
                <button type="submit" class="btn btn-primary" id="saveChangesBtn">Create</button>
                <div id="loadingSpinner" class="spinner-border text-primary d-none" role="status" style="width: 2rem; height: 2rem;">
                  <span class="visually-hidden">Loading...</span>
                </div>
              </div>

              

            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <label class="form-label">Status</label>
                <select class="form-select" name="status" aria-label="Default select example">
                  <option value="1" >Active</option>
                  <option value="0" >Inactive</option>
                </select>
              </div>
              <div class="row"> 
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Actual price (<del>Rs.</del>)</label>
                    <input type="number" name="price" class="form-control"  placeholder="" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Offer Price (Rs.)</label>
                    <input type="number" name="offprice" class="form-control"  placeholder="" required>
                  </div>
                </div> 
              </div>
              <div class="row"> 
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Is featured</label>
                    <select class="form-select" name="featured" aria-label="Default select example">
                      <option value="1" >Yes</option>
                      <option value="0" >No</option>
                      <option value="Special" >Special</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">On Sale</label>
                    <select class="form-select" name="onsale" aria-label="Default select example">
                      <option value="1" >Yes</option>
                      <option value="0" >No</option>
                    </select>
                  </div>
                </div> 
              </div>

              
              
              <div class="mb-3">
                <label class="form-label">Featured Image</label>
                <input class="form-control" type="file" name="image" accept="image/*"> 
              </div>
              <div class="mb-3">
                <label class="form-label">Meta Keywords ( Add , after word )</label>
                <input type="text" name="meta_keyword" class="form-control"  placeholder="Enter meta keywords">
              </div>
              <div class="mb-3">
                <label class="form-label">Meta Descriptions</label>
                <textarea class="form-control" name="meta_description" rows="3" placeholder="Write here..."> </textarea>
              </div>
            </div>
          </div>
        </form>
      </div>
      <!-- card-body -->
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
      <div class="toast-body flex-fill bg-warning bg-opacity-75"> @foreach ($errors->all() as $error) <p>{{ $error }}</p> @endforeach </div>
    </div>
  </div> 
  @endif

<script>
$(document).ready(function () {
    $('.repeater-variant').repeater({
        initEmpty: false,
        defaultValues: {
            'size': '',
            'color': '',
            'stock': 0,
            'price': 0,
        },
        show: function () {
            $(this).slideDown();
        },
        hide: function (deleteElement) {
            if(confirm('Are you sure you want to delete this variant?')) {
                $(this).slideUp(deleteElement);
            }
        }
    });
});
</script>

  @include('layouts.superAdmin.footer') @endsection