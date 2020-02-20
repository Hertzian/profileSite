<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="{{ asset('css/2020-1.css') }}">
    <title>Welcome to my Portfolio</title>
</head>
<body>
    
    @include('frontend.2020-1.partials.menu')

    @include('frontend.2020-1.sections.intro')

    @include('frontend.2020-1.sections.experience')

    @include('frontend.2020-1.sections.about')

    @include('frontend.2020-1.sections.skills')

    @include('frontend.2020-1.sections.work')

    @include('frontend.2020-1.sections.contact')

    @include('frontend.2020-1.partials.footer')

    <script src="{{ asset('js/2020-1.js') }}"></script>
</body>
</html>