@foreach ($links as $link)
    <li class="nav-item">
        <a class="nav-link" 
           href="{{  route('home', ['slug' => $link['slug']]) }}">
            {{ $link['title'] }}
        </a>
    </li>
@endforeach