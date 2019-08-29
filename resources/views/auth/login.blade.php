@extends('backend.layouts.applogin')

@section('content')

<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <div class="form-label-group">                
                        <input type="email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email address" required="required" autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="email">{{ __('Email') }}</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input id="password" id="password"type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="password">{{ __('Password') }}</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label for="remember">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Remember me
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block">
                    {{ __('Login') }}
                </button>

            </form>
        </div>
    </div>
</div>

@endsection
