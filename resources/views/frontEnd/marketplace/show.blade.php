@extends('layouts.frontEnd.layout') @section('content') @include('layouts.frontEnd.header')




<section class="banner-bg bg-dark imagebanner">
    <div class="container">
        <div class="row ">
            <div class="col-md-8 text-warning mt-3 mb-10">
                <span class="fs-16 text-warning mb-2" >Home / Marketplaces
            </span>
            </div>   
        </div>
    </div>
</section>



<!-- Price  -->
<div class=" bg-warning-2  domain-list-section mt-0 mb-10">
    <div class="container">
            <div class="card  border-0 rounded h-100  mt-n20 ">
                <div class="row align-items-lg-center mt-5 ">
                    <div class="col-lg-5 col-xl-5">
                        <!-- <img src="assets/img/blog-img-2.jpg" alt="image" class="img-fluid"> -->
                        <div class="position-relative z-1 ">
                            <div class="swiper hero-7-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{ asset('storage/images/' . $marketplace->path) }}" alt="image" class="img-fluid">
                                    </div>
                                    

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-7">
                        <div class="d-flex align-items-center gap-2">
                        <div class="w-3 h-3 rounded-circle bg-danger flex-shrink-0"></div>
                        <span class="d-block fw-semibold mb-0 text-danger">
                            {{$marketplace->category}}
                        </span>
                    </div>

                         
                            <h4 class="ff-sg mb-2 mt-2">{{$marketplace->name}}</h4>
                              <p class="mb-6 fw-medium mt-2">
                                      {{ $marketplace->hero }}</p>
                             {{-- <p class="text-black mb-0 fs-20"> <span class="text-danger fw-semibold">
                              @if ($marketplace->offprice)<del class="fw-bold text-body">
                              Rs.{{$marketplace->offprice}}</del> @endif
                              Rs.{{$marketplace->price}}</span>
                            </p> --}}
                           

                            {{-- <p class="fs-16 mb-0 mt-5">Size :</p> 
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                @foreach($marketplace->unitprice as $unitprice)
                                    <input type="radio" class="btn-check" name="btnradio" id="{{ $unitprice['title'] }}" autocomplete="off" checked>
                                    <label class="btn btn-sm btn-outline-warning text-dark" for="{{ $unitprice['title'] }}">{{ $unitprice['title'] }}</label>
                                @endforeach
                               
                            </div> --}}


                    <p class="text-black mb-0 fs-20">
                    <span class="text-danger fw-semibold" id="price-display">
                        Rs.{{ $marketplace->unitprice[0]['price'] ?? $marketplace->price }}
                    </span>
                    </p>

                    <p class="fs-16 mb-0 mt-5">Size :</p> 
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    @foreach($marketplace->unitprice as $index => $unitprice)
                        <input 
                        type="radio" 
                        class="btn-check" 
                        name="btnradio" 
                        id="unitprice-{{ $index }}" 
                        value="{{ $unitprice['price'] }}" 
                        autocomplete="off" 
                        @if($loop->first) checked @endif
                        >
                        <label class="btn btn-sm btn-outline-warning text-dark" for="unitprice-{{ $index }}">
                        {{ $unitprice['title'] }}
                        </label>
                    @endforeach
                    </div>

                    <p class="fs-16 mb-0 mt-5">Quantity :</p>
                    <div class="row">
                    <div class="col-md-5 mb-4">
                        <div class="number">
                        <span class="minus" style="cursor:pointer;">-</span>
                        <input type="text" id="quantity-input" value="1" style="width: 150px; text-align: center;" />
                        <span class="plus" style="cursor:pointer;">+</span>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div>
                        <a class="btn btn-primary w-100 booksubmit btn-block" data-bs-toggle="modal" data-bs-target="#marketmodal">
                            Order Now                                  
                        </a>
                        </div>
                    </div>
                    </div>

                    <script>
                    const priceDisplay = document.getElementById('price-display');
                    const quantityInput = document.getElementById('quantity-input');

                    function updatePrice() {
                        const selectedRadio = document.querySelector('input[name="btnradio"]:checked');
                        let price = selectedRadio ? parseFloat(selectedRadio.value) : 0;
                        let quantity = parseInt(quantityInput.value);

                        if (isNaN(quantity) || quantity < 1) quantity = 1;
                        quantityInput.value = quantity;  // sanitize input

                        const total = price * quantity;
                        priceDisplay.textContent = 'Rs.' + total.toFixed(2);
                        // priceDisplay.textContent = 'Rs.' + total;

                    }

                    // Update price when unitprice changes
                    document.querySelectorAll('input[name="btnradio"]').forEach(radio => {
                        radio.addEventListener('change', updatePrice);
                    });

                    // Update price when quantity changes
                    quantityInput.addEventListener('input', updatePrice);

                    // Plus / Minus buttons functionality
                    document.querySelector('.minus').addEventListener('click', () => {
                        let qty = parseInt(quantityInput.value);
                        if (qty > 1) {
                        quantityInput.value = qty - 1;
                        updatePrice();
                        }
                    });

                    document.querySelector('.plus').addEventListener('click', () => {
                        let qty = parseInt(quantityInput.value);
                        quantityInput.value = qty + 1;
                        updatePrice();
                    });

                    // Initialize price on page load
                    updatePrice();
                    </script>
                        
                           
                    </div>

                </div>
            </div>
        
 
            <div class="card  border-0 rounded-0 h-100">
                <div class="card-body  p-5 ">              
                    <div class="row mt-15">
                        <div class="col-12">
                            <div class="pricing-nav-pills pricing-nav-pills--danger d-block mx-auto border-bottom border-light-subtle sal-animate" >
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="partner-tab-nev d-inline-block text-decoration-none text-dark-emphasis fw-bold px-3 pb-2 active" href="#" data-bs-toggle="pill" data-bs-target="#details" aria-selected="false" role="tab" tabindex="-1">
                                            Descriptions
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="partner-tab-nev d-inline-block text-decoration-none text-dark-emphasis fw-bold px-3 pb-2 " href="#" data-bs-toggle="pill" data-bs-target="#benefits" aria-selected="true" role="tab">
                                            Benefits
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="partner-tab-nev d-inline-block text-decoration-none text-dark-emphasis fw-bold px-3 pb-2" href="#" data-bs-toggle="pill" data-bs-target="#significance" aria-selected="false" role="tab" tabindex="-1">
                                            Purpose and Significance:
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-11">

                                <div class="tab-content sal-animate" data-sal="fade" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                                    <div class="tab-pane fade active show" id="details" role="tabpanel">
                                        <p>
                                        {!! $marketplace->detail !!}
                                        </p>
                                        
                                        @if(!empty($marketplace->benefit) && is_iterable($marketplace->benefit))
                                            <h6 class="mt-4">Benefits</h6>                                 
                                            <ul class="list-unstyled d-flex flex-column gap-1 mb-0">                                        
                                                @foreach($marketplace->benefit as $benefit)
                                                <li class="d-flex align-items-center gap-3">
                                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                                        <i class="las la-check"></i>
                                                    </div>{{ $benefit['title'] }}
                                                </li>
                                                @endforeach
                                            </ul>
                                            @else                                            
                                        @endif


                                        @if($marketplace->purpose)
                                        <h6 class="mt-4">Purpose</h6>
                                        {!! $marketplace->purpose !!}
                                        @endif



                                    </div>
                                    <div class="tab-pane fade " id="benefits" role="tabpanel">
                                    @if(!empty($marketplace->benefit) && is_iterable($marketplace->benefit))
                                        <ul class="list-unstyled d-flex flex-column gap-1 mb-0">                                        
                                            @foreach($marketplace->benefit as $benefit)
                                            <li class="d-flex align-items-center gap-3">
                                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                                    <i class="las la-check"></i>
                                                </div>{{ $benefit['title'] }}
                                            </li>
                                            @endforeach
                                        </ul>

                                        @else
                                            <p>No benefits listed.</p>
                                        @endif
                                    </div>
                                    <div class="tab-pane fade" id="significance" role="tabpanel">
                                        <p>  {!! $marketplace->purpose !!} </p>
                                    </div>
                                </div>



                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </div>
</div>
<!-- /Price  -->
<!-- Modal -->
<div class="modal fade" id="marketmodal" tabindex="-1" aria-labelledby="marketmodalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md">
    <div class="modal-content">
      {{-- <div class="modal-header border-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> --}}
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="float:right"></button>

        <h5> Enquiry Form </h5>
        <form action="{{ route('complaints.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="col-12">
                    <label class="form-label fs-14">Enquiry For *</label>
                    <input type="text" value="{{$marketplace->name}} " name="subject" class="form-control" readonly>
                    <input type="text" value="{{$marketplace->category}} " name="category" class="form-control" readonly hidden>
                    
                </div>
                <div class="col-md-12">
                    <label class="form-label fs-14">Name *</label>
                    <input type="text" name="name" class="form-control" placeholder="Your Full Name" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fs-14">Phone *</label>
                    <input type="text" name="phone" class="form-control" placeholder="Your Contact No." required>
                </div>
                
                <div class="col-md-6">
                    <label class="form-label fs-14">Email *</label>
                    <input type="text" name="email" class="form-control" placeholder="Email Address" required>
                </div>
                
                <div class="col-md-12">
                    <label class="form-label fs-14">Shipping Address *</label>
                    <input type="text" name="address" class="form-control" placeholder="Address" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fs-14">Size *</label>
                    <input type="text" name="unit" class="form-control" placeholder="unit" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fs-14">Quantity *</label>
                    <input type="text" name="quantity" class="form-control" placeholder="quantity" required>

                </div>

                
                <div class="col-12">
                    <label for="messages" class="form-label fs-14">Messages (Upto 250 Words) If any</label>
                    <textarea name="detail" class="form-control" id="" cols="10" rows="2" placeholder="Write your message here.."></textarea>
                </div>
                
                <div class="col-12">
                    <button type="submit" href="#" class="btn btn-danger btn-arrow btn-arrow-md btn-lg fs-14 fw-medium rounded">
                        <span class="btn-arrow__text">
                            Submit
                            <span class="btn-arrow__icon">
                                <i class="las la-arrow-right"></i>
                            </span>
                        </span>
                    </button>
                    <span class="d-block fs-14 mt-4 fw-medium">
                        * By submitting information, you accept our Terms & Conditions
                    </span>
                </div>
            </div>
        </form>
      </div>
      
    </div>
  </div>
</div>


<!-- Pooja -->
<section class=" pt-15">
    <div class="pb-40">
        <div class="container">
            <div class="row g-4 ">
                <div class="col-md-6">
                    <div class=" sal-animate" >
                        <h4 class="mb-4 ">
                            Related Marketplaces
                        </h4>

                    </div>
                </div>
            </div>
            <div class="row g-4">
                @foreach($marketplaces as $marketplace)
                <div class="col-md-3 col-lg-3 sal-animate " >
                    <div class="card rounded-3 h-100">
                        <div class="card-header pt-4 border-bottom-0 bg-white">
                            <a href="{{ route('marketplaces.show',$marketplace->slug) }}" class="d-block text-decoration-none">
                                <div class="text-center list-thumb-lg">
                                    <img src="{{ asset('storage/images/'.$marketplace->path) }}" alt="icon" class="img-fluid mb-6 cropped-image">
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="market-info">                       
                                <h6 class="fs-18 mb-2 mt-2">
                                    <a href="{{ route('marketplaces.show',$marketplace->slug) }}" class="d-block text-decoration-none text-dark">
                                        {{ $marketplace->name }}
                                    </a>
                                </h6>

                                <p class="mb-2 fs-14">{{ $marketplace->hero }}</p>
                         </div>
                            
                        <small class="fw-bold text-danger fs-18">
                            @if ($marketplace->price)<del class="fw-bold text-body"> Rs.{{ $marketplace->price }}</del> @endif
                            @if ($marketplace->offprice) Rs.{{ $marketplace->offprice }} @endif
                        </small>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>



        </div>
    </div>

</section>


<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelector('.booksubmit').addEventListener('click', function () {
        // Get selected size value from the checked radio input
        const selectedSize = document.querySelector('input[name="btnradio"]:checked + label').innerText;

        // Get quantity value
        const quantity = document.querySelector('.number input[type="text"]').value;

        // Get user name from outside input if any (optional field — you can skip this if not needed)
        const enteredName = document.querySelector('input[name="name-outside"]')?.value || '';

        // Set values in modal form
        document.querySelector('input[name="unit"]').value = selectedSize;
        document.querySelector('input[name="quantity"]').value = quantity;
        if (enteredName) {
            document.querySelector('#marketmodal input[name="name"]').value = enteredName;
        }
    });
});
</script>

@include('layouts.frontEnd.footer') @endsection