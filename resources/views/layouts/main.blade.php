<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    @stack('swiper-style')

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @yield('main')

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://kit.fontawesome.com/209072fbdb.js" crossorigin="anonymous"></script>

    @stack('swiper-js')
    @stack('jumbotron')
    @stack('img-active')
</body>
</html>