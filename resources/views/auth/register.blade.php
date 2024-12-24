<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ثبت نام در دفترچه</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

<div class="main">
    <p class="sign" align="center">ثبت نام</p>
    <form class="form1" method="POST" action="{{ route('register') }}">
        @csrf

        <input class="un" type="text" name="name" align="center" placeholder="نام" value="{{ old('name') }}" required autocomplete="name" autofocus>
        @error('name')
        <span class="invalid-feedback" role="alert" style="display: block; text-align: center; color: red;">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input class="un" type="email" name="email" align="center" placeholder="ایمیل" value="{{ old('email') }}" required autocomplete="email">
        @error('email')
        <span class="invalid-feedback" role="alert" style="display: block; text-align: center; color: red;">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input class="pass" type="password" name="password" align="center" placeholder="کلمه عبور" required autocomplete="new-password">
        @error('password')
        <span class="invalid-feedback" role="alert" style="display: block; text-align: center; color: red;">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input class="pass" type="password" name="password_confirmation" align="center" placeholder="تأیید کلمه عبور" required autocomplete="new-password">

        <button type="submit" class="submit" align="center">ثبت نام</button>

    </form>
</div>

</body>
</html>
