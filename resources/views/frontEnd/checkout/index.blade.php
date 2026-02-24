@extends('layouts.frontEnd.layout') @section('content') @include('layouts.frontEnd.topheader')


<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main" class="cart-page">
    <!-- breadcrumb -->
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <!-- breadcrumb -->
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="/">Home</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Checkout</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">
        <div class="mb-4">
            <h1 class="text-center">Checkout</h1>
        </div>
        <!-- Accordion -->
        <div id="shopCartAccordion" class="accordion rounded mb-5">
            <!-- Card -->
            <div class="card border-0">
                <div id="shopCartHeadingOne" class="alert alert-primary mb-0" role="alert">
                    Returning customer? <a href="#" class="alert-link" data-toggle="collapse" data-target="#shopCartOne" aria-expanded="false" aria-controls="shopCartOne">Click here to login</a>
                </div>
                <div id="shopCartOne" class="collapse border border-top-0" aria-labelledby="shopCartHeadingOne" data-parent="#shopCartAccordion" style="">
                    <!-- Form -->
                    <form class="js-validate p-5">
                        <!-- Title -->
                        <div class="mb-5">
                            <p class="text-gray-90 mb-2">Welcome back! Sign in to your account.</p>
                            <p class="text-gray-90">If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing & Shipping section.</p>
                        </div>
                        <!-- End Title -->

                        <div class="row">
                            <div class="col-lg-6">
                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label class="form-label" for="signinSrEmailExample3">Email address</label>
                                    <input type="email" class="form-control" name="email" id="signinSrEmailExample3" placeholder="Email address" aria-label="Email address" required
                                    data-msg="Please enter a valid email address."
                                    data-error-class="u-has-error"
                                    data-success-class="u-has-success">
                                </div>
                                <!-- End Form Group -->
                            </div>
                            <div class="col-lg-6">
                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label class="form-label" for="signinSrPasswordExample2">Password</label>
                                    <input type="password" class="form-control" name="password" id="signinSrPasswordExample2" placeholder="********" aria-label="********" required
                                    data-msg="Your password is invalid. Please try again."
                                    data-error-class="u-has-error"
                                    data-success-class="u-has-success">
                                </div>
                                <!-- End Form Group -->
                            </div>
                        </div>

                        <!-- Checkbox -->
                        <div class="js-form-message mb-3">
                            <div class="custom-control custom-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="rememberCheckbox" name="rememberCheckbox" required
                                data-error-class="u-has-error"
                                data-success-class="u-has-success">
                                <label class="custom-control-label form-label" for="rememberCheckbox">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <!-- End Checkbox -->

                        <!-- Button -->
                        <div class="mb-1">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary-dark-w px-5">Login</button>
                            </div>
                            <div class="mb-2">
                                <a class="text-blue" href="#">Lost your password?</a>
                            </div>
                        </div>
                        <!-- End Button -->
                    </form>
                    <!-- End Form -->
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Accordion -->

        <!-- Accordion -->
        <div id="shopCartAccordion1" class="accordion rounded mb-6">
            <!-- Card -->
            <div class="card border-0">
                <div id="shopCartHeadingTwo" class="alert alert-primary mb-0" role="alert">
                    Have a coupon? <a href="#" class="alert-link" data-toggle="collapse" data-target="#shopCartTwo" aria-expanded="false" aria-controls="shopCartTwo">Click here to enter your code</a>
                </div>
                <div id="shopCartTwo" class="collapse border border-top-0" aria-labelledby="shopCartHeadingTwo" data-parent="#shopCartAccordion1" style="">
                    <form class="js-validate p-5" novalidate="novalidate">
                        <p class="w-100 text-gray-90">If you have a coupon code, please apply it below.</p>
                        <div class="input-group input-group-pill max-width-660-xl">
                            <input type="text" class="form-control" name="name" placeholder="Coupon code" aria-label="Promo code">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-block btn-dark font-weight-normal btn-pill px-4">
                                    <i class="fas fa-tags d-md-none"></i>
                                    <span class="d-none d-md-inline">Apply coupon</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Accordion -->
         <form id="checkoutForm"  action="{{ route('checkout.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                    <div class="pl-lg-3 ">
                        <div class="bg-gray-1 rounded-lg">
                            <!-- Order Summary -->
                            <div class="p-4 mb-4 checkout-table">
                                <!-- Title -->
                                <div class="border-bottom border-color-1 mb-5">
                                    <h3 class="section-title mb-0 pb-2 font-size-25">Your order</h3>
                                </div>
                                <!-- End Title -->
                                <input type="" name="amount" value="{{ $total }}">
                                <input type="" name="category" value="cart">
                                {{-- <input type="" name="event" value="3rd National Banking Discourse 2025"> --}}

                                @foreach ($cart as $productId => $item)
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="" name="product_ids[]" value="{{ $productId }}">
                                            <input type="" name="quantities[]" value="{{ $item['quantity'] }}">
                                        </div>
                                    </div>                                
                                @endforeach
                                <input type="" name="select" value="mypay">
                                <!-- Product Content -->
                                <table class="table mb-3 mb-md-0">
                                   <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td data-title="Subtotal">
                                                <span class="amount">Rs. {{ number_format($subtotal, 2) }}</span>
                                            </td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>Shipping</th>
                                            <td data-title="Shipping">
                                                Flat Rate: <span class="amount">Rs. {{ number_format($shipping, 2) }}</span>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td data-title="Total">
                                            <strong><span class="amount">Rs. {{ number_format($total, 2) }}</span></strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="wrapper mt-0 mb-4">
                                    <input type="radio" name="select" id="option-1" value="mypay" checked hidden>
                                    <label for="option-1" class="option option-1 pt-2">
                                        <img src="{{ asset('storage/images/n5AvDcxdL4eD5JG16vegpSHGx6tidYeOZPl3pH5c.png') }}" alt="" class="img-fluid h-10">
                                        <p class="mt-2 pb-3">MyPay Wallet</p>
                                    </label>

                                    <input type="radio" name="select" id="option-2" value="qrcode" hidden>
                                    <label for="option-2" class="option option-2 pt-2">
                                        <img src="{{ asset('storage/images/Jc8wxtWuY5q3NCSuXdzQxlj6tF5hkcEfk5HfUsyz.png') }}" alt="" class="img-fluid h-10">
                                        <p class="mt-2 pb-3">QR Code</p>
                                    </label>

                                    <input type="radio" name="select" id="option-3" value="cod" hidden>
                                    <label for="option-3" class="option option-3 pt-2">
                                        <img src="{{ asset('storage/images/VzSFQxYJVYosD4TGzclZlrNEAeNquWxT6VX3qkaN.png') }}" alt="" class="img-fluid h-10">
                                        <p class="mt-2 pb-3">Cash on Delivery</p>
                                    </label>
                                </div>

                                
                                
                                <div class="form-group d-flex align-items-center justify-content-between px-3 mb-5">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck10" required
                                            data-msg="Please agree terms and conditions."
                                            data-error-class="u-has-error"
                                            data-success-class="u-has-success">
                                        <label class="form-check-label form-label" for="defaultCheck10">
                                            I have read and agree to the website <a href="#" class="text-blue">terms and conditions </a>
                                            <span class="text-danger">*</span>
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary-dark-w btn-block btn-pill font-size-20 mb-3 py-3">Place order</button>
                            </div>
                            <!-- End Order Summary -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 order-lg-1">
                    <div class="pb-7 mb-7">
                        <!-- Title -->
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title mb-0 pb-2 font-size-25">Billing details</h3>
                        </div>
                        <!-- End Title -->


                        

                        <div class="row">
                            <div class="col-md-12">
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        Full name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Full Name"  required="" data-msg="Please enter your frist name." autocomplete="off">
                                </div>
                            </div>

                            
                            <div class="col-md-6">
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        Phone
                                    </label>
                                    <input type="text" class="form-control" name="phone" placeholder="Enter your Phone"  data-msg="Please enter your last name.">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        Email address
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter your Email address"  required="" data-msg="Please enter a valid email address.">
                                </div>
                            </div>                          
                            
                            <div class="col-md-12">
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        Street address
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="address" placeholder="470 Lucy Forks"  data-msg="Please enter a valid address.">
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="js-form-message mb-6">
                                    <label class="form-label">
                                        Order notes (optional)
                                    </label>

                                    <div class="input-group">
                                        <textarea class="form-control p-5" rows="4" name="detail" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </div>                            
                            </div>                          
                        </div>    
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->
<script>
document.getElementById('checkoutForm').addEventListener('submit', function(e) {
    const selected = document.querySelector('input[name="select"]:checked').value;

    if(selected === 'mypay') {
        this.action = "{{ route('mypay.create') }}";
    } else if(selected === 'cod') {
        this.action = "{{ route('checkout.store') }}"; // keep default
    } else {
        this.action = "{{ route('checkout.store') }}"; // default or any other route
    }
});
</script>

@include('layouts.frontEnd.footer') @endsection