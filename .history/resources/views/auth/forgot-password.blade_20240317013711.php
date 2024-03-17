@extends('auth.register')

@section('title')
Heros | forgot password
@endsection

@section('sign')

    @if (session('success'))
        <div style="height:40px;color:black;background-image: linear-gradient(to right,#DF63FF,#82E9EF);display: flex;align-items: center;justify-content: center;">
        {{ session('success')  }}
        </div>
        {!! '<br><br>' !!}
    @endif

    <div style="width:100%;display: flex;height:200px;align-items:center;">
        <h1 class="mb-0" style="width:100%;padding:0px 0px 70px 0px;">Sign In</h1>
        <a class="sign-in-logo mb-5" style="margin-bottom:0px;" href="/login">
            <img src="../assets/images/login/sign.png"
                style="width:100%;height:200px;display: block;margin-left: auto;margin-right: auto;"
                class="img-fluid"
                alt="logo">
        </a>
    </div>


    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{--  --}}">
        @csrf

        <!-- Email Address -->
        @if($errors->has('email'))
            <div class="alert alert-danger">
                @error('email')
                    {{ $message }}
                @enderror
            </div>

            
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
@endsection
