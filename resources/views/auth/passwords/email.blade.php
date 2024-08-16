@extends('layouts.app')
@section('title', config('app.name') . ' - Reset account')
@section('content')
    <div
        style="background-image: url('{{ asset('assets/img/backgrounds/we-are-now-open.jpg') }}');background-position: center;background-repeat: no-repeat;background-size: cover;">
        <div class="container d-flex justify-content-center  align-items-center min-vh-100">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-center">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets/img/logo_new.png') }}" alt="Logo" height="30px">
                            </a>
                            <p>{{ __('Reset Password') }}</p>
                        </div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="email" class="">{{ __('Email Address') }}</label>

                                    <div class="col-12">
                                        <input id="email" type="email"
                                            class="form-control rounded-1  @error('email') is-invalid @enderror shadow-none "
                                            name="email" value="{{ old('email') }}" required autocomplete="email"
                                            autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button type="submit" class="rounded-1 btn btn-primary">
                                            {{ __('Submit') }}
                                        </button>
                                        <a class="link-body-emphasis text-decoration-none"
                                            href="{{ route('login') }}">Login</a>
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
