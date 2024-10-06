@extends('layouts.app')

@section('title', 'Signs')

@section('content')

<!-- Service Overview Section -->
<section class="bg-sec service-overview-section py-5">
    <div class="container">
        <h1 class="title mb-2">Custom Signs, Banners and Graphics</h1>
        <h4 class="subtitle my-2">Let PD Signs Help You Make Your Statement</h4>
        <p class="paragraph mt-2">
            Want to make a quick, lasting impression on both current and prospective customers and clients? PD Signs is your go-to resource for custom banners, signs, graphics, and more. We do more than just create signs – we are industry leaders in the business of creating visual communications. Through a comprehensive, creative, and results-based approach, we increase our customers’ visibility with custom solutions designed for their needs. Regardless of the size or style, our team is ready to handle projects of all scopes.
        </p>
        <p class="paragraph">
             Our team can design signs and graphics that cover all of your visual communication needs, from building signs to interior décor to vehicle graphics. We also offer a wide range of accessories to help you make a stronger impression at trade shows and conferences.
        </p>
        <p class="paragraph">
             *Products and services may vary by location. Please reach out to  PD Signs centre for more information.
        </p>
    </div>
</section>
<!-- End Service Overview Section -->

<!-- Products Section -->
<section class="container products-section mt-3">
    <h2 class="fw-bold">Products</h2>
    <div class="wrapper">
        @foreach($products as $product)
            <x-product-card :product="$product" />
        @endforeach
    </div>
</section>
<!-- End Products Section -->

<!-- Inspiration Section -->
<section class="container bg-sec inspiration-section py-4 px-5">
    <div class="row">
        <div class="col-md-6 col-12">
            <h1 class="title">Haven’t found what you are looking for?</h1>
            <p class="paragraph"> 
                View our entire gallery of products to gather some more ideas. The possibilities are endless, and we are confident that we have the solution that will fit your needs.
            </p>
            <button class="btn"> VIEW FULL GALLERY</button>
        </div>
        <div class="col-md-6 col-12"></div>
    </div>
</section>
<!-- End Inspiration Section -->



@endsection