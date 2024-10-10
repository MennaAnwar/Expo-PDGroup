@props(['title'])

@section('title', $page->title)
    
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

    <!-- Resources section -->
    <section class="container mt-3 p-0">
        <div class="d-flex flex-wrap justify-content-center">
            @foreach ($resources as $resource)
                <div class="bg-sec resource-card d-flex flex-column align-items-center">
                    <img src="{{ asset('build/assets/images/' . $resource->img) }}" alt="{{ $resource->title }}">
                    <h2 class="text-dark text-center fw-normal">{{ $resource->title }}</h2>
                    <a href="{{ route('resources', ['slug' => $resource->link]) }}" class="card-btn">VIEW VIDEO</a>
                </div>
            @endforeach
        </div>
    </section>
    <!-- End Resources section -->
    
