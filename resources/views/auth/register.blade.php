@extends('layouts.main')


@section('page-title', 'Register')
@section('content')

<div class="auth-page auth-page--register">
    <form class="auth-page__form" method="POST" action="{{ route('register') }}">
        @csrf

        <h3 class="auth-page__title">Register</h3>
        <div class="auth-page__form-group">
            <label for="name" class="auth-page__form-label" >Name</label>
            <input type="text" name="name" class="auth-page__form-input" value="{{old('name')}}" required autofocus />
            @error('name')
                <div class="error-sub-text">
                    {{$message}}
                </div>
            @enderror
        </div>
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
            <label for="password_confirmation" class="auth-page__form-label">Confirm Password</label>
            <input type="password" name="password_confirmation" class="auth-page__form-input" required />
            @error('password_confirmation')
                <div class="error-sub-text">
                    {{$message}}
                </div>
            @enderror
        </div>        
        <div class="auth-page__form-group">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">Already registered?</a>
        </div>
        <div class="auth-page__form-group">
            <button type="submit" class="auth-page__form-button">Register</button>
        </div>
    </form>
</div>

@endsection
