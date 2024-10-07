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
            <a href="#our-work-section"><span>SOME OF <br>OUR WORK</span></a>
        </div>
        <div class="service-card">
            <a href="#our-services-section"><span>SERVICES <br> WE OFFER</span></a>
        </div>
        <div class="service-card">
            <a href="#contact-us-section"><span>DO YOU WANT <br>TO CONTACT US</span></a>
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
    <section class="mt-5 p-0 container"id="our-work-section">
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
    <section class="p-0 mt-5 container" id="our-services-section">
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

    <!-- Resources Section -->
    <section class="p-p mt-5 container our-resources-section">
        <h3 class="title"> IMPORTANT RESOURCES FOR EXHIBITORS</h3>
        <div class="d-flex justify-content-center flex-wrap">
            <div class="border-card p-3 position-relative">
                <h3 class="title">Do’s & Don’ts of a networking events</h3>
                <h3 class="title fw-normal">Do’s of a networking events</h3>
                <ol class="mb-0 p-3">
                    <li><span class="subtitle">Prepare a Quick Introduction (Elevator Pitch)</span></li>
                    <li><span class="subtitle">Research Attendees or Companies</span></li>
                    <li><span class="subtitle">Be Approachable and Engaged</span></li>
                    <li><span class="subtitle">Ask Open-Ended Questions</span></li>
                </ol>
                <span class="subtitle"> ........  Read more</span>
                <h3 class="title fw-normal">Don’ts of a networking events</h3>
                <ol class="mb-0 p-3">
                    <li><span class="subtitle">Don’t Hard-Sell Yourself or Your Business</span></li>
                    <li><span class="subtitle">Don’t Dominate Conversations</span></li>
                    <li><span class="subtitle">Don’t Interrupt Ongoing Conversations</span></li>
                    <li><span class="subtitle">Don’t Stay in One Group the Whole Time</span></li>
                </ol>
                <span class="subtitle"> ........  Read more</span>
                <div class="position-absolute bottom-0 end-0 p-3">
                    <button class="card-btn fs-6">READ MORE</button>
                </div>
            </div>
            <div class="border-card p-3 position-relative">
                <h3 class="title">How to deliver unexpected at an expo</h3>
                <h3 class="title fw-normal">
                    Here are some creative ideas to introduce surprise elements and elevate the attendee experience:
                </h3>
                <ol class="mb-0 p-3">
                    <li><span class="subtitle">Interactive Experiences with a Twist</span></li>
                    <li><span class="subtitle">Technology-Driven Surprises</span></li>
                    <li><span class="subtitle">Gamification and Unexpected Challenges</span></li>
                    <li><span class="subtitle">Engage All Five Senses</span></li>
                    <li><span class="subtitle">Giveaways with a Twist</span></li>
                </ol>
                <span class="subtitle"> ........  Read more</span>
                <div class="position-absolute bottom-0 end-0 p-3">
                    <button class="card-btn fs-6">READ MORE</button>
                </div>
            </div>
            <div class="border-card p-3 position-relative">
                <h3 class="title"> How to prepare for an exhibition</h3>
                <h3 class="title fw-normal">
                    HPreparing for an exhibition requires careful planning and organization to ensure that you make the most of the opportunity. Here's a step-by-step guide on how to prepare effectively
                </h3>
                <ol class="mb-0 p-3">
                    <li><span class="subtitle">Set Clear Goals and Objectives</span></li>
                    <li><span class="subtitle">Research and Choose the Right Exhibition</span></li>
                    <li><span class="subtitle">Plan Your Exhibition Booth Design</span></li>
                    <li><span class="subtitle">Finalize Your Product or Service Display</span></li>
                </ol>
                <span class="subtitle"> ........  Read more</span>
                <div class="position-absolute bottom-0 end-0 p-3">
                    <button class="card-btn fs-6">READ MORE</button>
                </div>
            </div>
            <div class="border-card p-3 position-relative">
                <h3 class="title">Progressing from design to exhibit</h3>
                <h3 class="title fw-normal">
                    The "From Design to Exhibit" process involves turning creative concepts into a fully realized exhibition. Here's a comprehensive step-by-step guide to the process
                </h3>
                <ol class="mb-0 p-3">
                    <li><span class="subtitle">Concept Development</span></li>
                    <li><span class="subtitle">Initial Design Planning</span></li>
                    <li><span class="subtitle">3D Visualization and Detailed Design</span></li>
                    <li><span class="subtitle">Prototyping and Testing</span></li>
                </ol>
                <span class="subtitle"> ........  Read more</span>
                <div class="position-absolute bottom-0 end-0 p-3">
                    <button class="card-btn fs-6">READ MORE</button>
                </div>
            </div>
        </div>
    </section>
    <!-- End Resources Section -->

    <!-- Contact us Section -->
    <section class="my-3 p-0 container" id="contact-us-section">
        <div class="bg-sec p-5 d-flex flex-md-row flex-column justify-content-between align-items-center">
            <div class="text-center text-md-start">
                <h3 class="title">Let's Get Started</h3>
                <h3 class="title fw-normal"> Reach out and request a consultation.</h3>
            </div>
            <div class="mt-md-0 mt-3">
                <button class="card-btn fs-6">READ MORE</button>
            </div>
        </div>
    </section>
    <!-- End Contact us Section -->
    
@endsection