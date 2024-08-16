@extends('layouts.app')
@section('title', config('app.name') . ' - Login')
@section('content')
    <div
        style="background-image: url('{{ asset('assets/img/backgrounds/we-are-now-open.jpg') }}');background-position: center;background-repeat: no-repeat;background-size: cover;">
        <div class="container d-flex align-items-center justify-content-center min-vh-100">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('assets/img/branding/planet-logo.svg') }}" alt="Logo"
                                        height="30px">
                                </a>
                                <p>{{ __('Welcome back') }}</p>
                            </div>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row mb-3">
                                    <label for="email" class="">{{ __('Email Address') }}</label>

                                    <div class="col-12">
                                        <input id="email" type="email"
                                            class="form-control shadow-none rounded-1  @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required autocomplete="email"
                                            autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password" class="">{{ __('Password') }}</label>

                                    <div class="col-12">
                                        <input id="password" type="password"
                                            class="form-control shadow-none rounded-1  @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <button type="submit" class="rounded-1 btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                        <a href="{{ route('register') }}" class="text-decoration-none ">Register</a>
                                    </div>
                                    <div class="col-12 text-center ">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
