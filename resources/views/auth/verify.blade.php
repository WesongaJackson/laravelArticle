@extends('layouts.app')
@section('title', config('app.name') . ' - Verify account')
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
                            <p>{{ __('Verify Your Email Address') }}</p>
                        </div>

                        <div class="card-body">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                            @endif

                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }},
                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <button type="submit"
                                    class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
