@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center py-5">
        <div class="col-md-8">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card rounded-2 p-3" style="background-color: #040724">
                        <div class="text-white font-heading text-xl">Login</div>

                        <div class="card-body ps-0 mt-3">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="email"
                                        class="d-block form-label text-white font-body text-lg font-medium">{{ __('Email
                                        Address') }}</label>

                                    <div class="col-md-12">
                                        <input id="email" type="email"
                                            class="form-control rounded-2 myInput @error('email') is-invalid @enderror"
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
                                    <label for="password"
                                        class="d-block form-label text-white font-body text-base font-medium">{{
                                        __('Password')
                                        }}</label>

                                    <div class="col-md-12">
                                        <input id="password" type="password"
                                            class="form-control rounded-2 myInput @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- <div class="row mb-3">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="row mb-0 mt-5">
                                    <div class="col-md-12 d-flex align-items-center justify-content-between">
                                        <button type="submit"
                                            class="btn btn-primary special-btn-hover rounded-pill border-2 px-4">
                                            {{ __('Login') }}
                                        </button>
                                        {{-- @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card rounded-2 p-3" style="background-color: #040724">
                        <div class="text-white font-heading text-xl">Note: </div>
                        <p class="text-white font-body text-base my-3">This login page is for admin use only.
                            Unauthorized access is prohibited.</p>
                        <a href="https://wa.me/03049164099"
                            class="btn btn-primary special-btn-hover rounded-pill border-2 px-4 mt-4">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection