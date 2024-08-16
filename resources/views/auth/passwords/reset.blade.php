@extends('layouts.app')
@section('title', config('app.name') . ' - Reset account')
@section('content')
    <div
        style="background-image: url('{{ asset('assets/img/backgrounds/we-are-now-open.jpg') }}');background-position: center;background-repeat: no-repeat;background-size: cover;">
        <div class="container d-flex justify-content-center  align-items-center min-vh-100">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">{{ __('Reset Password') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="row mb-3">
                                    <label for="email" class="">{{ __('Email Address') }}</label>

                                    <div class="col-12">
                                        <input id="email" type="email"
                                            class="shadow-none  form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ $email ?? old('email') }}" required
                                            autocomplete="email" autofocus>

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
                                            class="shadow-none  form-control @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

                                    <div class="col-12">
                                        <input id="password-confirm" type="password" class="shadow-none  form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-12">
                                        <div class="d-flex justify-content-between">
                                            <button type="submit" class="rounded-1 btn btn-primary">
                                                {{ __('Reset Password') }}
                                            </button>
                                            <a href="{{ route('login') }}"
                                                class="text-decoration-none text-body-emphasis">Login</a>
                                        </div>
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
