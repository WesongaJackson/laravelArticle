@extends('layouts.app')
@section('title', config('app.name') . ' - Register an account')
@section('content')
    <div
        style="background-image: url('{{ asset('assets/img/backgrounds/we-are-now-open.jpg') }}');background-position: center;background-repeat: no-repeat;background-size: cover;">
        <div>
            <div class="container d-flex justify-content-center align-items-center min-vh-100">
                <div class="row">
                    <div class="col-sm-8 col-md-6 mx-auto">
                        <div class="card rounded rounded-bottom shadow">
                            <div class="card-header p-0">
                                <div class="text-center mx-auto p-3">
                                    <a href="{{ url('/') }}">
                                        <img src="{{ asset('assets/img/branding/planet-logo.svg') }}" alt="Logo"
                                            height="30px">
                                    </a>
                                </div>

                                <div class="card-body">

                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="row mb-3">
                                            <div class="col-12">
                                                <label for="name" class="">{{ __('Name') }}</label>
                                                <input id="name" type="text"
                                                    class="rounded-1 form-control shadow-none rounded-1 @error('name') is-invalid @enderror"
                                                    name="name" value="{{ old('name') }}" autocomplete="name" autofocus
                                                    wire:model='buyer_name'>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>


                                            <div class="col-12">
                                                <label for="email" class="">{{ __('Email Address') }}</label>
                                                <input id="email" type="email"
                                                    class="rounded-1 form-control shadow-none rounded-1 @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" autocomplete="email"
                                                    wire:model='buyer_email'>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>


                                            <div class="col-12">
                                                <label for="password" class="">{{ __('Password') }}</label>
                                                <input id="password" type="password"
                                                    class="rounded-1 form-control shadow-none rounded-1 @error('password') is-invalid @enderror"
                                                    name="password" autocomplete="new-password" wire:model='buyer_password'>

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-12">
                                                <label for="password-confirm"
                                                    class="">{{ __('Confirm Password') }}</label>
                                                <input id="password-confirm" type="password"
                                                    class="rounded-1 form-control shadow-none rounded-1"
                                                    name="password_confirmation" autocomplete="new-password"
                                                    wire:model='buyer_password_confirmation'>
                                            </div>
                                        </div>

                                        <div class="row mb-0">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <button type="submit" class="rounded-1 btn btn-primary">
                                                    {{ __('Register') }}
                                                </button>
                                                <a href="{{ route('login') }}"
                                                    class="link-body-emphasis text-decoration-none">Login</a>
                                            </div>
                                            <div class="col-12 text-center ">
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            </div>
                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    @endsection
