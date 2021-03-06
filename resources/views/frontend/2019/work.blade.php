@extends('frontend.layouts.app')

@section('body')

@endsection

@section('main')
    work
@endsection

@section('content')

    <h1 class="lg-heading">
        My <span class="text-secondary">Work</span>
    </h1>
    <h2 class="sm-heading">
        Check out some of my projects.
    </h2>
    <div class="projects">
        @if (count($works) >= 1)
            @foreach ($works as $work)
                @if ($work->show)
                    <div id="work-{{ $work->id }}" class="item">
                        <a href="{{ $work->img }}">
                            <img src="storage/img/{{ $work->img }}" alt="Project">
                        </a>
                        <a href="{{ $work->url }}" class="btn-light">
                            <i class="fas fa-eye"></i> {{ $work->name }}
                        </a>
                        <a href="{{ $work->github }}" class="btn-dark">
                            <i class="fab fa-github"></i> Github
                        </a>
                    </div>
                    
                @endif
            @endforeach
        @endif
    </div>

@endsection