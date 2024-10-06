@extends('layouts.app')

@section('title', $page->slug)

@section('content')

<!-- Service Overview Section -->
<section class="bg-sec service-overview-section py-5">
    <div class="container">
        <h1 class="title mb-2">{{ $page->title }}</h1>
        <h4 class="subtitle my-2">{{$page->subtitle}}</h4>
        @foreach ($page->description as $desc)
            <p class="paragraph">{{ $desc }}</p>
        @endforeach
    </div>
</section>
<!-- End Service Overview Section -->

<!-- Products Section -->
<section class="container products-section mt-3">
    <h2 class="fw-bold">Products</h2>
    <div class="wrapper">
        @foreach ($page->products as $product)
            <x-product-card :product="$product" />
        @endforeach
    </div>
</section>
<!-- End Products Section -->

<!-- Inspiration Section -->
<x-inspiration-card :img="$page->img"/>
<!-- End Inspiration Section -->



@endsection