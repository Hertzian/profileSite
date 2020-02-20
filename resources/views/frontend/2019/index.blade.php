@extends('frontend.layouts.app')

@section('body')
bg-img
@endsection

@section('background')
    {{-- style="background: url('storage/img/{{  $user->background }}');" --}}
@endsection



@section('main')
    home
@endsection

@section('content')

    <h1 class="lg-heading">
        {{ $user->name }} <span class="text-secondary">{{ $user->surname }}</span>
    </h1>
    <h2 class="sm-heading">
        {{ $user->profesion }}
        {{-- Web Developer, Programer, Designer & Entrepreneur --}}
    </h2>
    <div class="icons">
        <!-- <a href="#">
            <i class="fab fa-twitter fa-2x"></i>
        </a>
        <a href="#">
            <i class="fab fa-facebook fa-2x"></i>
        </a> -->
        <!-- <a href="#">
            <i class="fab fa-linkedin fa-2x"></i>
        </a> -->
        <a href="https://github.com/hertzian">
            <i class="fab fa-github fa-2x"></i>
        </a>
    </div>

@endsection