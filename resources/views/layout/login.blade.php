<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login page</title>
        <!--all css js link-->
        @include ('layout.apps.assets')
        <!--all css js link end-->
    </head>
    <body class="login-body">
        <!--login form section start now-->
        <section class="login-form">
            <h2 class="title pb-3">Login an account?</h2>
            @if(session('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
            @endif
            <form method="POST" action="{{ route('login.store') }}">
                @csrf
                <label for="username">Your email account</label>
                <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Enter your email">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

                <label for="password" class="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="password">
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

                <button type="submit" name="submit" class="login-btn">Login</button>
                <a href="#" class="register-btn"><span class="admin-icon"><i class="fa-solid fa-user"></i></span>Register An Account</a>
            </form>
        </div>
        <!--login form End Now-->
    </body>
</html>