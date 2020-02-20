@extends('frontend.layouts.app')

@section('body')

@endsection

@section('main')
    contact
@endsection

@section('content')

    <h1 class="lg-heading">
        Contact <span class="text-secondary">Me</span>
    </h1>
    <h2 class="sm-heading">
        This is how you can reach me.
    </h2>
    <div class="boxes">
        <div>
            <span class="text-secondary">Email:</span>
            {{ $user->email }}
        </div>
        <div>
            <span class="text-secondary">Phone:</span>
            {{ $user->phone }}
        </div>
        <!-- <div>
            <span class="text-secondary">Address:</span>
            50 Main st Boston MA 02101
        </div> -->
    </div> 

@endsection