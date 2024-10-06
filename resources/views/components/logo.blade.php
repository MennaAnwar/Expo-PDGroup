<a href="{{ route('subPage', ['slug' => $href]) }}" class="logo">
    <img src="{{ asset('build/assets/images/' . $logo) }}" alt="Logo" class="{{ $class }}">
    @if ($name)
        <p class="bold">{{$name}}</p>
    @endif
</a>