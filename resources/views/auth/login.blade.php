@extends('layouts.main')


@section('page-title', 'Login')
@section('content')

<div class="auth-page auth-page--login">
    <form class="auth-page__form" method="POST" action="{{ route('login') }}">
        @csrf

        <h3 class="auth-page__title">Login</h3>
        <div class="auth-page__form-group">
            <label for="email" class="auth-page__form-label" >Email</label>
            <input type="email" name="email" class="auth-page__form-input" value="{{old('email')}}" required autofocus />
            @error('email')
                <div class="error-sub-text">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="auth-page__form-group">
            <label for="password" class="auth-page__form-label">Password</label>
            <input type="password" name="password" class="auth-page__form-input" required autocomplete="current-password" />
            @error('password')
                <div class="error-sub-text">
                    {{$message}}
                </div>
            @enderror
        </div>
        
        <div class="auth-page__form-group">
            <label for="remember" class="auth-page__form-label">Remember Me
                <input id="remember_me" type="checkbox" 
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                    name="remember"> 
            </label>
        </div>
        <div class="auth-page__form-group" >
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">Forgot your password?</a>
            @endif
        </div>

        <div class="auth-page__form-group">
            <button type="submit" class="auth-page__form-button"> Login </button>
        </div>
    </form>
</div>

@endsection
