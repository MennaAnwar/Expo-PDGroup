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

    <!-- Our Work Section -->
    <section class="mt-5 p-0 container our-work-section">
        <h2 class="title"> OUR WORK</h2>
        <div class="row">
            <div class="mb-4 col-lg-8 col-md-12 mb-lg-0">
                <div class="border-card"></div>
            </div>
            <div class="col-lg-4 col-md-12 d-flex flex-column flex-lg-column flex-md-row justify-content-between">
                <div class="border-card h-100 w-100"></div>
                <div class="border-card h-100 w-100"></div>
            </div>
        </div>
    </section>
    <!-- End Our Work Section -->

    <!-- Inspiration Section -->
    <section class="container bg-sec inspiration-section mt-5 p-0">
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

    <!-- OUR SERVICES section -->
    <section class="p-0 mt-5 container our-services-section">
        <h3 class="title">OUR SERVICES</h3>
        <div class="d-flex justify-content-center flex-wrap">
            <div class="border-card p-3 position-relative">
                <h3 class="title fw-normal w-75">Strategy & Show Planning</h3>
                <ul class="list-unstyled mb-5">
                    <li><span class="subtitle">Creative & Design</span></li>
                    <li><span class="subtitle">Marketing</span></li>
                    <li><span class="subtitle">Registration</span></li>
                    <li><span class="subtitle">Analytics</span></li>
                    <li><span class="subtitle">Event Tech</span></li>
                </ul>
                <div class="position-absolute bottom-0 end-0 p-3">
                    <button class="card-btn fs-6">READ MORE</button>
                </div>
            </div>
            <div class="border-card p-3 position-relative">
                <h3 class="title fw-normal w-75">Program & Event Management</h3>
                <ul class="list-unstyled mb-5">
                    <li><span class="subtitle">Content & Speakers</span></li>
                    <li><span class="subtitle">Program Management</span></li>
                    <li><span class="subtitle">Graphics Production & Design</span></li>
                    <li><span class="subtitle">Exhibitor Education</span></li>
                </ul>
                <div class="position-absolute bottom-0 end-0 p-3">
                    <button class="card-btn fs-6">READ MORE</button>
                </div>
            </div>
            <div class="border-card p-3 position-relative">
                <h3 class="title fw-normal w-75"> Show Site Services</h3>
                <ul class="list-unstyled mb-5">
                    <li><span class="subtitle">Installation & Dismantle</span></li>
                    <li><span class="subtitle">Exhibitor Booth Rentals</span></li>
                    <li><span class="subtitle">Electrical & Rigging</span></li>
                    <li><span class="subtitle">Show Organizer Operations</span></li>
                </ul>
                <div class="position-absolute bottom-0 end-0 p-3">
                    <button class="card-btn fs-6">READ MORE</button>
                </div>
            </div>
            <div class="border-card p-3 position-relative">
                <h3 class="title fw-normal w-75">Exhibitor Experience</h3>
                <ul class="list-unstyled mb-5">
                    <li><span class="subtitle">Transportation</span></li>
                    <li><span class="subtitle">Shipping & Material Handling</span></li>
                    <li><span class="subtitle">Installation & Dismantle</span></li>
                    <li><span class="subtitle">Contingency Planning & Crisis</span></li>
                </ul>
                <div class="position-absolute bottom-0 end-0 p-3">
                    <button class="card-btn fs-6">READ MORE</button>
                </div>
            </div>
        </div>
    </section>
    <!-- End OUR SERVICES section -->
    
@endsection