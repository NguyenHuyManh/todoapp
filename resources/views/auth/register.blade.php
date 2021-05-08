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
        <div id="form-register">
            <div class="form-register-right">
                <h3 class="form-register-right--title">Sign Up</h3>
                <p class="form-register-right--desc">Register and create an account on Todo List.Write your tasks
                    anytime and anywhere</p>

                <p class="form-register-right--sign-up">Already have an account ?
                    <a href="{{ route('login') }}">Login</a>
                </p>
            </div>
            <div class="form-register-left">
                <form action="{{ route('register.post') }}" method="POST">
                    @csrf
                    <div class="form-register-left__input">
                        <div class="form-group">
                            <input type="text" name="name" class="form-input" placeholder="Username" id="username">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-input" placeholder="Email" id="email">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-input" placeholder="Password" id="pwd">
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password_confirm" class="form-input" placeholder="Password Confirm" id="pwd">
                            @error('password_confirm')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-register-left__action">
                        <button type="submit" class="btn btn-block form-register-left__action-submit">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

</body>

</html>