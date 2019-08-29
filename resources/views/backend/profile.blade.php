@extends('backend.layouts.app')

@section('content')

<h1>Profile</h1>

<div class="card mb-3 col-md-6 px-0">
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
                <label for="profesion">Profesion:</label>
                <input type="text" name="profesion" value="{{ $user->profesion }}" id="profesion" class="form-control">
            </div>
            <div class="form-group">
                <label for="bio">Bio:</label>
                <input type="text" name="bio" value="{{ $user->bio }}" id="bio" class="form-control">
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
                <label for="img">Image:</label>
                <input type="file" id="img" name="img" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
    </div>
    <div class="card-footer small text-muted"> - </div>
</div>

@endsection