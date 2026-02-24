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
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Cart</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">
        <div class="mb-4">
            <h1 class="text-center">Cart</h1>
        </div>
        <div class="mb-10 cart-table">
            <form action="{{ route('cart.updateAll') }}" method="POST">
                @csrf
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if($cart)
                    <table class="table" cellspacing="0">
                        <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($cart as $id => $item)  
                            <tr>
                               <td class="text-center">
                                    <a href="{{ route('cart.remove', $id) }}" class="text-gray-32 font-size-26 ">×</a>
                                </td>
                                <td>
                                    <img class="img-fluid max-width-100 p-1 border border-color-1"
                                        src="{{ asset('storage/images/' . ($item['image'] ?? 'default.jpg')) }}"
                                        alt="{{ $item['name'] }}">
                                </td>

                                <td>{{ $item['name'] }}</td>
                                <td>Rs.{{ $item['price'] }}</td>
                                <td>
                                    <div class="border rounded-pill py-2 px-3 width-122 w-xl-80 border-color-1">
                                        <div class="js-quantity row align-items-center">
                                            <div class="col">
                                                <input name="quantity[{{ $id }}]" class="js-result form-control h-auto border-0 rounded p-0 shadow-none" 
                                                    type="number" value="{{ $item['quantity'] }}" min="1">
                                            </div>
                                            <div class="col-auto pr-1">
                                                <a class="js-minus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                </a>
                                                <a class="js-plus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </td>                
                                <td>Rs.{{ $item['price'] * $item['quantity'] }}</td>
                            </tr>

                            <!-- hidden form for remove -->
                            <form id="remove-form-{{ $id }}" action="{{ route('cart.remove', $id) }}" method="POST" style="display:none;">
                                @csrf
                            </form>
                        @endforeach


                        <tr>
                            <td colspan="6" class="border-top space-top-2 justify-content-center">
                                <div class="pt-md-3">
                                    <div class="d-block d-md-flex flex-center-between">
                                        <div class="mb-3 mb-md-0 w-xl-40">
                                            <!-- Apply coupon Form -->                                            
                                                {{-- <label class="sr-only" for="subscribeSrEmailExample1">Coupon code</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="text" id="subscribeSrEmailExample1" placeholder="Coupon code" aria-label="Coupon code" aria-describedby="subscribeButtonExample2" required="">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-block btn-dark px-4" type="button" id="subscribeButtonExample2"><i class="fas fa-tags d-md-none"></i><span class="d-none d-md-inline">Apply coupon</span></button>
                                                    </div>
                                                </div>                                             --}}
                                            <!-- End Apply coupon Form -->
                                        </div>
                                        <div class="d-md-flex">
                                            <button type="submit" class="btn btn-soft-secondary mb-3 mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5 w-100 w-md-auto">Update cart</button>
                                            <a href="/checkout" class="btn btn-primary-dark-w ml-md-2 px-5 px-md-4 px-lg-5 w-100 w-md-auto d-none d-md-inline-block">Proceed to checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                @else
                    <p>Your cart is empty.</p>
                @endif
            </form>
        </div>
        <div class="mb-8 cart-total">
            <div class="row">
                <div class="col-xl-5 col-lg-6 offset-lg-6 offset-xl-7 col-md-8 offset-md-4">
                    <div class="border-bottom border-color-1 mb-3">
                        <h3 class="d-inline-block section-title mb-0 pb-2 font-size-26">Cart totals</h3>
                    </div>
                    
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
                    <a href="/checkout" type="button" class="btn btn-primary-dark-w ml-md-2 px-5 px-md-4 px-lg-5 w-100 w-md-auto d-md-none">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->

<script>
  document.querySelectorAll('.js-quantity').forEach(function (wrapper) {
    const input = wrapper.querySelector('.js-result');
    const plus = wrapper.querySelector('.js-plus');
    const minus = wrapper.querySelector('.js-minus');

    plus.addEventListener('click', function () {
      input.value = parseInt(input.value) + 1;
    });

    minus.addEventListener('click', function () {
      let val = parseInt(input.value);
      if (val > 1) {
        input.value = val - 1;
      }
    });
  });
</script>

@include('layouts.frontEnd.footer') @endsection