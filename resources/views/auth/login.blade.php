@extends('layouts.app')

@section('content')
    <div class="main">
        <p class="sign" align="center">ورود</p>
        <form class="form1" method="POST" action="{{ route('login') }}">
            @csrf
            <input class="un" type="text" name="email" align="center" placeholder="نام کاربری" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert" style="display: block; text-align: center; color: red;">
            <strong>{{ $message }}</strong>
        </span>
            @enderror

            <input class="pass" type="password" name="password" align="center" placeholder="کلمه عبود" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert" style="display: block; text-align: center; color: red;">
            <strong>{{ $message }}</strong>
        </span>
            @enderror

            <button type="submit" class="submit" align="center">Sign in</button>

            @if (Route::has('password.request'))
                <p class="forgot" align="center">
                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                </p>
            @endif
        </form>
    </div>
@endsection
