@extends('backend.layouts.app')

@section('content')

<h1>Profile</h1>

<div class="card mb-3 col-md-8 px-0">
    <div class="card-header">
        <i class="fa fa-user"></i> Edit your data
    </div>
    <div class="card-body">
        <form action="{{ url('/admin/profile') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" value="{{ $user->name }}" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="surname">Surname:</label>
                <input type="text" name="surname" value="{{ $user->surname }}" id="surname" class="form-control">
            </div>
            <div class="form-group">
                <label for="github">github:</label>
                <input type="text" name="github" value="{{ $user->github }}" id="github" class="form-control">
            </div>
            <div class="form-group">
                <label for="linkedin">linkedin:</label>
                <input type="text" name="linkedin" value="{{ $user->linkedin }}" id="linkedin" class="form-control">
            </div>
            <div class="form-group">
                <label for="profesion">Profesion:</label>
                <textarea class="form-control" id="profesion" name="profesion" rows="3">{{ $user->profesion }}</textarea>
            </div>
            <div class="form-group">
                <label for="bio">Bio:</label>
                <textarea class="form-control" id="bio" name="bio" rows="3">{{ $user->bio }}</textarea>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" name="phone" value="{{ $user->phone }}" id="phone" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email" value="{{ $user->email }}" id="email" class="form-control">
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="background">Background Image:</label>
                    <input type="file" id="background" name="background" class="form-control-file">
                </div>
            </div>
            <div class="form-row">
                <div class="col-6">

                    <label for="img">Profile Image:</label>
                    <input type="file" id="img" name="img" class="form-control-file">

                </div>
                <div class="col-6">
                    <label for="password">password:</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="col-6">
                    <img style="width:200px;" src="{{ url('storage/img/' . $user->img)}}" class="rounded float-left" alt="{{ $user->name }} {{ $user->surname }}">
                    
                </div>

            </div>
            
            {{-- <div class="form-group">
                <label for="password">password:</label>
                <input type="password" name="password" id="password" class="form-control">
            </div> --}}
            <button type="submit" class="btn btn-primary btn-block mt-2">Submit</button>
        </form>
    </div>
    <div class="card-footer small text-muted"> - </div>
</div>

@endsection