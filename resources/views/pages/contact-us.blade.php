@extends('layouts.app')

@section('title', ' Contact Us')

@section('content')

    <!-- PATH -->
    <section class="container my-5 path-section">
        <div class="d-flex">
            <h6>Home</h6>
            <div class="vr"></div>
            <h6 class="fw-bold">Contact</h6>
        </div>
    </section>
    <!-- END PATH -->

    <!-- Contact Us section -->
    <section class="container my-5 contact-us-section">
        <div class="row">
            <div class="col-md-6 col-12 order-md-1 order-2 mt-3 mt-md-3">
                <h3 class="title">Contact Us</h3>
                <p class="subtitle fs-6">
                    Have any questions for us? Don’t hesitate to contact us.
                </p>

                <form action="" id="contact-us-form" class="needs-validation" novalidate>
                    @csrf
                    <div class="row">
                        <div class="mb-3 row mb-lg-0">
                            <div class="col-12">
                                <label class="form-label required">Name</label>
                                <input type="text" class="form-control" name="name" required>
                                <div class="invalid-feedback">This field is required</div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Phone Number</label>
                                <input type="number" class="form-control" name="phone_number"/>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label required">Email Address</label>
                                <input type="email" class="form-control" name="email" required />
                                <div class="invalid-feedback">This field is required</div>
                            </div>

                            <div class="col-12">
                                <label class="form-label required">Message</label>
                                <textarea class="form-control" name="message" required></textarea>
                                <div class="invalid-feedback">This field is required</div>
                            </div>

                            <div class="col-12">
                                <div class="my-3">
                                    <div class="g-recaptcha" data-sitekey="6Lfo4x0qAAAAACJcUsta35yAO-C_hYKFZ_ywRTv1"></div>
                                    @error('g-recaptcha-response')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn shop-now mt-3">Submit</button>
                </form>
            </div>
            <div class="col-md-6 col-12 order-1 order-md-2">
                <div class="keep-in-touch bg-sec">
                    <h5 class="title"> Let’s Keep In Touch!</h5>
                    <p class="subtitle fs-6">
                        We would love to hear from you. Contact us for any inquiries you might have for us.
                    </p>
                    <ul class="list-unstyled">
                        <li><i class='bx bxs-phone'></i></i> 0044 800 6121047</li>
                        <li><i class='bx bxs-envelope' ></i> info@proprint.biz</li>
                        <li class="d-flex align-items-start">
                            <i class='bx bxs-map mt-1'></i>
                            <span class="ms-2">Unit B2 & B3, Dresser Centre, Whitworth Street, Manchester M11 2NE</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Us section -->



@endsection