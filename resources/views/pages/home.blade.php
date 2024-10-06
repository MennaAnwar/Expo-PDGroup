@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <!-- HERO SECTION -->
    <section class="container hero-section mt-3">
        <div class="swiper mySwiper bg-sec">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="d-flex justify-content-center align-items-center">
                        Slide 1
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="d-flex justify-content-center align-items-center">
                        Slide 2
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="d-flex justify-content-center align-items-center">
                        Slide 3
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="d-flex justify-content-center align-items-center">
                        Slide 4
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="d-flex justify-content-center align-items-center">
                        Slide 5
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- END HERO SECTION -->

    <!-- Categories Section-->
    <section class="container categories-section d-flex justify-content-center flex-wrap mt-3">
        <div class="category-card">
            <span>Print</span>
        </div>
        <div class="category-card">
            <span>Sign</span>
        </div>
        <div class="category-card">
            <span>Shopfitting</span>
        </div>
        <div class="category-card">
            <span>Cut</span>
        </div>
        <div class="category-card">
            <span>Expo</span>
        </div>
    </section>
    <!-- End Categories Section-->

    <!-- Inspiration Section -->
    <section class="container bg-sec inspiration-section p-0">
        <div class="card-container">
            <div class="text-container">
                <h1 class="title">Haven’t found what you are looking for?</h1>
                <p class="paragraph"> 
                    The possibilities are endless, and we are confident that we have the solution that will fit your needs.
                </p>
                <button class="btn">Contact Us</button>
            </div>
            <div class="img-container">
                <img src="{{ asset('build/assets/images/expo.png') }}" alt="expo-pdgroup">
            </div>
        </div>
    </section>
    <!-- End Inspiration Section -->

    <section class="container mt-3">
        <div class="promotion-card bg-sec position-relative">
            <div class="position-absolute bottom-0 end-0 p-3">
                <button class="card-btn fs-6">READ MORE</button>
            </div>
        </div>
    </section>
    <section class="container mt-3">
        <div class="row d-flex justify-content-between">
            <div class="col-12 col-md-6">
                <div class="border-card position-relative">
                    <div class="position-absolute bottom-0 end-0 p-3">
                        <button class="card-btn fs-6">READ MORE</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="border-card position-relative">
                    <div class="position-absolute bottom-0 end-0 p-3">
                        <button class="card-btn fs-6">READ MORE</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container mt-3">
        <div class="promotion-card bg-sec position-relative">
            <div class="position-absolute bottom-0 end-0 p-3">
                <button class="card-btn fs-6">READ MORE</button>
            </div>
        </div>
    </section>
    <section class="container mt-3">
        <div class="row d-flex justify-content-between">
            <div class="col-12 col-md-6">
                <div class="border-card position-relative">
                    <div class="position-absolute bottom-0 end-0 p-3">
                        <button class="card-btn fs-6">READ MORE</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="border-card position-relative">
                    <div class="position-absolute bottom-0 end-0 p-3">
                        <button class="card-btn fs-6">READ MORE</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

@endsection