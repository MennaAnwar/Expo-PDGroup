@foreach ($links as $link)
    <li class="nav-item">
        <a class="nav-link" 
           href="{{ route($link['route'])}}">
            {{ $link['title'] }}
        </a>
    </li>
@endforeach