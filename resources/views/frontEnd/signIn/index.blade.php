@extends('layouts.frontEnd.layout') @section('content') @include('layouts.frontEnd.header')
<!-- Hero -->
<section class="bg-primary-2 pt-60 pb-60">
    <div class="px-8">
        <div class="home-9-hero pt-80 pb-80 px-2 rounded-4" style="background-image: url(https://tradiequote.com.au/storage/images/gSjopSHP1vo9unEHvxBDDb78GrVvIEzApiTu2MH0.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5" data-sal="fade" data-sal-duration="1000" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <div class="card border-0 rounded-4">
                            <div class="card-body pt-40 pb-40 px-md-12">
                                <div class="row">
                                    <div class="col-md-12 col-xl-12">
                                        <div class="overflow-hidden mb-6">
                                            <h5 class="mb-0 d-inline-block flush-subtitle">
                                           Sign In Your Account
                                        </h5>
                                        </div>
                                        <form action="{{ route('merchant.signin') }}" method="POST">
                                            @csrf
                                            <div class="row g-3">
                                                <div class="col-md-12">
                                                    <label for="merchant_id" class="form-label fs-14">Username</label>
                                                    <input type="text"  name="merchant_id" class="form-control" placeholder="Merchant ID" required>
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="password" class="form-label fs-14">Password</label>
                                                    <div class="input-group mb-3">
                                                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                                                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                                            <i class="las la-eye-slash text-dark fs-18"></i>
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary btn-arrow btn-arrow-md btn-lg fs-14 fw-medium rounded">
                                                        <span class="btn-arrow__text">
                    Sign In
                    <span class="btn-arrow__icon">
                        <i class="las la-arrow-right"></i>
                    </span>
                                                        </span>
                                                    </button>
                                                    <span class="d-block fs-14 mt-4 fw-medium">
                Don't have an account? <a href="/register-business">List Your Business</a>
            </span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- /Hero -->


    <section class="bg-primary-2 pb-120">
        <div class="container">
            <h3 class="fs-36 mb-4 text-center">Booking Tradie Made Easy With Tradie Quote</h3>
<p class="text-center">Easily find, compare, and book trusted tradies in minutes — all in one place with Tradie Quote.</p>
           <ul class="list-unstyled info-list mt-25">
    <li class="text-center">
        <h5 class="mb-3">Tell Us What You Need</h5>
        <p class="mb-0">Submit your job details in just a few clicks — it’s fast, easy, and free to get started.</p>
    </li>
    <li class="text-center">
        <h5 class="mb-3">Get Multiple Quotes</h5>
        <p class="mb-0">Receive competitive quotes from verified tradies ready to take on your job.</p>
    </li>
    <li class="text-center">
        <h5 class="mb-3">Choose the Best Tradie</h5>
        <p class="mb-0">Compare profiles, read reviews, and pick the tradie that best suits your needs.</p>
    </li>
</ul>

        </div>
    </section>

<script>
    document.getElementById('togglePassword').addEventListener('click', function () {
        const passwordInput = document.getElementById('password');
        const icon = this.querySelector('i');
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            icon.classList.remove('la-eye-slash');
            icon.classList.add('la-eye');
        } else {
            passwordInput.type = "password";
            icon.classList.remove('la-eye');
            icon.classList.add('la-eye-slash');
        }
    });
</script>
@include('layouts.frontEnd.footer') @endsection