@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <!-- HERO SECTION -->
    <section class="container hero-section mt-3 p-0">
        <div class="bg-sec p-5">
            <div class="vedio">Vedio</div>
            <h1 class="title text-dark">
                Experiences That Go Beyond Expectations
            </h1>
        </div>
    </section>
    <!-- END HERO SECTION -->

    <!-- Services Overview Section -->
    <section class="container mt-3 p-0 services-section d-flex justify-content-between flex-wrap">
        <div class="service-card">
            <span>SOME OF <br>OUR WORK</span>
        </div>
        <div class="service-card">
            <span>SERVICES <br> WE OFFER</span>
        </div>
        <div class="service-card">
            <span>DO YOU WANT <br>TO CONTACT US</span>
        </div>
    </section>
    <!-- End Services Overview Section -->

    <!-- About Us Preview Section -->
    <section class="container mt-3 Preview-section p-0">
        <div class="promotion-card bg-sec d-flex position-relative">
            <div class="d-flex flex-column justify-content-end mb-5 mb-md-0">
                <h2 class="title text-dark">
                    We are Redefining EXPO by creating meaningful experiences, connecting exhibitors with audiences, and driving value in creative ways.
                </h2>
                <div class="d-flex">
                    <h4 class="title">WE DESIGN</h4>
                    <div class="vr"></div>
                    <h4 class="title">WE MANUFACTURE</h4>
                    <div class="vr"></div>
                    <h4 class="title">WE FIT</h4>
                </div>
            </div>
            <div class="position-absolute bottom-0 end-0 p-3">
                <button class="card-btn fs-6">READ MORE</button>
            </div>
        </div>
    </section>
    <!-- End About Us Preview Section -->

    <!-- Inspiration Section -->
    <section class="container bg-sec inspiration-section mt-3 p-0">
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
    
@endsection