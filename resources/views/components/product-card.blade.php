<div class="card">
    <img src="" alt="{{ $product['title'] }}" class="card-img-top">
    <div class="d-flex align-items-center mt-2">
        <h3 class="card-title fw-bold">{{ $product['title'] }}</h3>
        <a href="{{ route('productDetails', ['slug' => $product['slug']]) }}" 
            class="card-btn">
            MORE
        </a>
    </div>
</div>
