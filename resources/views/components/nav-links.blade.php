@foreach ($links as $link)
    <li class="nav-item {{ Request::routeIs($link['route']) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route($link['route']) }}">
            {{ $link['title'] }}
        </a>
    </li>
@endforeach