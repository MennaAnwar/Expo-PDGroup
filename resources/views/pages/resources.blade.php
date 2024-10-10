@extends('layouts.app')

@section('content')
    <x-resources/>

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
@endsection