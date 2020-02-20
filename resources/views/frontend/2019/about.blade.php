@extends('frontend.layouts.app')

@section('body')

@endsection

@section('main')
    about
@endsection

@section('content')

    <h1 class="lg-heading">
        About <span class="text-secondary">Me</span>
    </h1>
    <h2 class="sm-heading">
        Let me tell you a few things.
    </h2>
    <div class="about-info">
        <img src="{{ url('storage/img/' . $user->img)}}" alt="Lalo Aguilar" class="bio-image">
        <div class="bio">
            <h3 class="text-secondary">BIO</h3>                
            <p>{{ $user->bio }}</p>
        </div>

        @if (count($jobs) >= 1)
            @foreach ($jobs as $job)
                @if ($job->show)
                    <div id="job-{{ $job->id }}" class="job job-1">
                        <h3>{{ $job->company }}</h3>
                        <h6>{{ $job->job }}</h6>
                        <p>{{ $job->assignment }}</p>
                    </div>                
                @endif
            @endforeach            
        @endif

    </div>    

@endsection