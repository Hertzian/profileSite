<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> --}}
    <script src="https://kit.fontawesome.com/bc09df0ab2.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="{{ asset('css/2020-1.css') }}">
    <title>Welcome to my Portfolio</title>
</head>
<body>
    @include('frontend.2020-1.partials.menu')

    <!-- Introduction -->
    <section class="intro" id="home">
        <h1 class="section__title section__title--intro">
            Welcome to <strong>{{ $work->name }}</strong>
        </h1>
        <p class="section__subtitle section__subtitle--intro txtType" data-wait='3000' data-words='["A short description of {{ $work->name }}"]'></p>
        <img class="intro__img" src="{{ url('storage/img/' . $work->img) }}" alt="a picture project1">
    </section>

    <div class="portfolio-item-individual">
        <p><a class="btn" href="{{ $work->github }}">This is the repo</a></p>
        <p><a class="btn" href="{{ $work->url }}">You can visit {{ $work->name }} from here</a></p>
        <p>{{ $work->description1}}</p>
        <img src="{{ url('storage/img/' . $work->img) }}" alt="a picture of project1">
        <p>{{ $work->description2 }}</p>
    </div>

    @include('frontend.2020-1.partials.footer')

    <script src="{{ asset('js/2020-1.js') }}"></script>
</body>
</html>