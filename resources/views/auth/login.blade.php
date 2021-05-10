<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" />
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
                <form action="{{ route('post.login') }}" method="POST" id="btn-login">
                    @csrf
                    <div class="form-login-right__input">
                        <div class="form-group">
                            <input type="email" name="email" class="form-input" placeholder="Enter email" id="email">
                        </div>
                        <div class="error-email" style="text-align: center;margin-bottom: 6px;text-align: center"></div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-input" placeholder="Enter password"
                                id="pwd">
                        </div>
                        <div class="error-password" style="text-align: center;margin-bottom: 6px;text-align: center">
                        </div>
                    </div>

                    <div class="form-login-right__action">
                        <button type="submit" class="btn btn-block form-login-right__action-submit">Login</button>
                        <div class="error-account" style="margin-bottom: 6px;text-align: center"></div>
                        <div class="form-login-right__action-forgot-password">
                            <p>Forgot your password ?</p>
                            <a href="">Forgot Password</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#btn-login').submit(function(event) {
                event.preventDefault();

                var url = $(this).attr('action');
                var email = $('#email').val();
                var password = $('#pwd').val();
                var _token = $("input[name=_token]").val();

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        _token: _token,
                        email: email,
                        password: password
                    },
                    dataType: 'json',
                    success: function(data) {
                        if (data.status == 'false') {                                              
                            if (data.message.password) {
                                toastr.warning('',data.message.password,{
                                    progressBar:true,
                                });
                            }
                            if (data.message.email) {
                                toastr.warning('',data.message.email,{
                                    progressBar:true,
                                });
                            }  
                        }
                        if(data.login == 'fail')
                        {
                            toastr.warning('',data.message,{
                                progressBar:true,
                            });
                        }
                        if(data.login == 'success')
                        {
                            window.location.href = "{{ route('home') }}";
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>
</body>

</html>