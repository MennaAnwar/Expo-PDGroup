@foreach ($links as $link)
    <li class="nav-item">
        <a class="nav-link" 
           href="{{ request()->is('/') ? route('subPage', ['slug' => $link['slug']]) : route('productDetails', ['slug' => $link['slug']]) }}">
            {{ $link['title'] }}
        </a>
    </li>
@endforeach