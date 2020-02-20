<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Welcome to my Portfolio</title>
    @yield('style')
</head>
<body id="@yield('body')" @yield('background')>
    
    @include('frontend.partials.menu')

    <main id="@yield('main')">
        @yield('content')
    </main>

    @include('frontend.partials.footer')

    <script src="{{ asset('js/main.js') }}"></script>
    
    @yield('scripts')

</body>
</html>