<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
{{-- <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no, maximu-scale=1.0, minimum-scale=1.0"> --}}
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Admin</title>

<link rel="icon" href="img/favicon.ico" type="image/gif" sizes="16x16">

<!-- Custom fonts for this template-->
{{-- <link href="{{ asset('css/all.min.css')}}" rel="stylesheet" type="text/css"> --}}
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<!-- Page level plugin CSS-->
<link href="{{ asset('css/dataTables.bootstrap4.css') }}" rel="stylesheet">
<!-- Custom styles for this template-->
<link href="{{ asset('css/sb-admin.min.css') }}" rel="stylesheet">

@yield('style')

</head>

<body id="page-top">

    @include('backend.partials.navbar')    

    <div id="wrapper">
    

        @include('backend.partials.sidebar')

        <div id="content-wrapper">

            <div class="container-fluid">

                @include('backend.partials.message')


                @yield('content')

            </div>

            @include('backend.partials.footer')

        

        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

    
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin.min.js') }}"></script>
    
    @yield('scripts')
    
</body>
</html>