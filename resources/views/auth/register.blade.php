@extends('layouts.app')

@section('content')
<div class="container">
    <div class="flex items-center border-[1px] border-[#8f9399] py-9 px-14 w-fit mx-auto rounded flex-col">
        <h1 class="text-center mb-5">Регистрация</h1>
            <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-4">
                @csrf
                <label
                for="name"
                class="flex flex-col gap-2">{{ __('Name') }}
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror custonInput" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </label>
                <label for="email" class="flex flex-col gap-2">

                    {{ __('Email Address') }}
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror custonInput" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>
                <label for="password" class="flex flex-col gap-2">{{ __('Password') }}


                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror custonInput" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>
                <label for="password-confirm" class="flex flex-col gap-2">{{ __('Confirm Password') }}


                    <input id="password-confirm" type="password" class="form-control custonInput" name="password_confirmation" required autocomplete="new-password">

                </label>
                <button type="submit" class="customButton w-full">
                    {{ __('Register') }}
                </button>

            </form>

        </div>
    </div>
</div>
@endsection
