<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
                <form action="{{ route('register.post') }}" method="POST" id="btn-register">
                    @csrf
                    <div class="form-register-left__input">
                        <div class="form-group">
                            <input type="text" name="name" class="form-input" placeholder="Username" id="username">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-input" placeholder="Email" id="email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-input" placeholder="Password" id="pwd">
                           
                        </div>
                        <div class="form-group">
                            <input type="password" name="password_confirm" class="form-input" placeholder="Password Confirm" id="pwd-confirm">
                        </div>
                    </div>
                    <div class="form-register-left__action">
                        <button type="submit" class="btn btn-block form-register-left__action-submit">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#btn-register').submit(function(event) {
                event.preventDefault();

                var url = $(this).attr('action');
                var name = $('#username').val();
                var email = $('#email').val();
                var password = $('#pwd').val();
                var password_confirm = $('#pwd-confirm').val();
                var _token = $("input[name=_token]").val();


                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        _token: _token,
                        email: email,
                        password: password,
                        name: name,
                        password_confirm: password_confirm
                    },
                    dataType: 'json',
                    success: function(data) {
                        if (data.status == 'false') {
                            if (data.message.password_confirm) {
                                toastr.warning('',data.message.password_confirm,{
                                    progressBar:true,
                                });
                            }                                                                                   
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
                            if (data.message.name) {
                                toastr.warning('',data.message.name,{
                                    progressBar:true,
                                });
                            } 
                        }
                        if(data.register == 'success')
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