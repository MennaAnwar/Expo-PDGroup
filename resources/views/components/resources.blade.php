@extends('layouts.app')

@section('title', $page->title)

@section('content')
    <!-- HERO SECTION -->
    <section class="container hero-section mt-3 p-0">
        <div class="bg-sec video-container">
            <video id="custom-video" class="w-100" poster="{{asset('build/assets/images/' . $page->img )}}">
                <source src='{{$page->video}}' type='video/mp4'>
            </video>
            <div class="video-overlay-text">
                <h1 class="fw-bold px-5">
                    {{$page->title}}
                </h1>
            </div>
            <button id="custom-play-btn" class="custom-play-btn">
                <i class='bx bx-play'></i>
                <span>PLAY</span>
            </button>
            <button id="custom-pause-btn" class="custom-pause-btn">
                <i class='bx bx-pause' ></i>
                <span>PAUSE</span>
            </button>
        </div>
    </section>
    <!-- END HERO SECTION -->
    
@endsection