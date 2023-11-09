@extends('layouts.auth')

@section('content')


<div class="card-body mt-2">
    <h4 class="mb-5 fw-semibold">{{ __('Login') }}</h4>

    <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
        @csrf  

        <div class="form-floating form-floating-outline mb-4">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <label for="email">{{ __('Email Address') }}</label>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-4">
            <div class="form-password-toggle">
                <div class="input-group input-group-merge">
                    <div class="form-floating form-floating-outline">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <label for="password">{{ __('Password') }}</label>
                    </div>
                    <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- <div class="mb-3 d-flex justify-content-between">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember-me">
                    {{ __('Remember Me') }}
                </label>
            </div>
            @if (Route::has('password.request'))
                <a href="{{route('password.request')}}" class="float-end mb-1">
                    <span>Forgot Password?</span>
                </a>
            @endif
        </div> -->
        <div class="mb-3">
            <button class="btn btn-primary d-grid w-100" type="submit">{{ __('Login') }}</button>
        </div>

    </form>
</div>
@endsection
