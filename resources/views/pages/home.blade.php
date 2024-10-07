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
    <section class="container mt-3 services-section">
        
    </section>
    <!-- End Services Overview Section -->

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