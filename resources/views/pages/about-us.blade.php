@extends('layouts.app')

@section('title', 'About Us')

@section('content')

    <!-- Service Overview Section -->
    <section class="bg-sec service-overview-section py-5">
        <div class="container">
            <h1 class="title mb-2">
                From Modular Systems to Bespoke Stands
            </h1>
            <h4 class="subtitle my-2">
                PD Expo Can Help You Make Your Statement
            </h4>
            <p class="paragraph">
                We offer everything from small-scale portable display stands to large-scale customisable stands. We understand that a display stand is your shop-window at marketing events, for this reason we will make sure not only for you to achieve but exceed your expectations.
            </p>
            <p class="paragraph">
                After having over 10 years of experience (and more than 20 trade show booths delivered in the UK and abroad), we know how to find the most cost-effective solutions without compromising quality.            </p>
            <p class="paragraph">
                We have a huge range of different exhibition equipment to suit your business needs, big or small. Exhibition stands can increase sales and boost interest in your company simply by luring customers to your booth.            </p>
        </div>
    </section>
    <!-- End Service Overview Section -->

    <!-- Products Section -->
    <section class="container products-section mt-3">
        <h2 class="fw-bold">Products</h2>
        <div class="wrapper">
            <div class="card">
                <img src="" alt="Bespoke Stands" class="card-img-top">
                <div class="d-flex align-items-center mt-2">
                    <h3 class="card-title fw-bold">
                        Bespoke Stands
                    </h3>
                    <a href="" 
                        class="card-btn">
                        MORE
                    </a>
                </div>
            </div>
            <div class="card">
                <img src="" alt="Modular Systems" class="card-img-top">
                <div class="d-flex align-items-center mt-2">
                    <h3 class="card-title fw-bold">
                        Modular Systems
                    </h3>
                    <a href="" 
                        class="card-btn">
                        MORE
                    </a>
                </div>
            </div>
            <div class="card">
                <img src="" alt="Graphics" class="card-img-top">
                <div class="d-flex align-items-center mt-2">
                    <h3 class="card-title fw-bold">
                        Graphics
                    </h3>
                    <a href="" 
                        class="card-btn">
                        MORE
                    </a>
                </div>
            </div>
            <div class="card">
                <img src="" alt="Printing" class="card-img-top">
                <div class="d-flex align-items-center mt-2">
                    <h3 class="card-title fw-bold">
                        Printing
                    </h3>
                    <a href="" 
                        class="card-btn">
                        MORE
                    </a>
                </div>
            </div>
            <div class="card">
                <img src="" alt="Installation" class="card-img-top">
                <div class="d-flex align-items-center mt-2">
                    <h3 class="card-title fw-bold">
                        Installation
                    </h3>
                    <a href="" 
                        class="card-btn">
                        MORE
                    </a>
                </div>
            </div>

        </div>
    </section>
    <!-- End Products Section -->

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

    @include('partials.contact-us')

@endsection