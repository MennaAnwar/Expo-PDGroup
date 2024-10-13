<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
    @include('partials.scripts')

</body>

</html>
