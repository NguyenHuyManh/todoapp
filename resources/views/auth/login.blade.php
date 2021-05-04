<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('To-do-app/css/grid.css') }}">
    <link rel="stylesheet" href="{{ asset('To-do-app/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('To-do-app/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('To-do-app/css/responsive.css') }}">

</head>

<body>

<div id="wrapper">
    <div id="form-login">
        <div class="form-login-left">
            <h3 class="form-login-left--title">Login</h3>
            <p class="form-login-left--desc">Log in and start creating your next task</p>
            <p class="form-login-left--sign-up">Do not have an account ?
                <a href="{{ route('register') }}">Sign up</a>
            </p>
        </div>
        <div class="form-login-right">
            <form action="{{ route('post.login') }}" method="POST">
                @csrf
                <div class="form-login-right__input">
                    <div class="form-group">
                        <input type="email" name="email" class="form-input" placeholder="Enter email" id="email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-input" placeholder="Enter password" id="pwd">                 
                    </div>
                </div>

                <div class="form-login-right__action">
                    <button type="submit" class="btn btn-block form-login-right__action-submit">Login</button>
                    <div class="form-login-right__action-forgot-password">
                        <p>Forgot your password ?</p>
                        <a href="">Forgot Password</a>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>

</body>

</html>
