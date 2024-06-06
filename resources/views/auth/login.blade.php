@extends('layouts.app')

@section('content')
<div class="container">
    <div class="flex items-center border-[1px] border-[#8f9399] py-9 px-14 w-fit mx-auto rounded flex-col">

                <h1 class="text-center mb-5">{{ __('Login') }}</h1>
                    <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-4">
                        @csrf


                        <label for="email" class="flex flex-col">{{ __('Email Address') }}
                                <input
                                id="email"
                                type="email"
                                class="form-control @error('email') is-invalid @enderror custonInput"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autocomplete="email"
                                autofocus
                                placeholder="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </label>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input
                                id="password"
                                type="password"
                                class="form-control @error('password') is-invalid @enderror  custonInput"
                                name="password"
                                required
                                autocomplete="current-password"
                                placeholder="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>


                                <button type="submit" class="customButton w-full">
                                    {{ __('Login') }}
                                </button>

                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}

                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
