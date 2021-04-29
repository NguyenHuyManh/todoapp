<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('To-do-app/css/grid.css') }}">
    <link rel="stylesheet" href="{{ asset('To-do-app/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('To-do-app/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('To-do-app/css/responsive.css') }}">

</head>

<body>

<div id="wrapper">
    <div id="header">
        <div class="grid">
            <div class="header-content">
                <div class="logo">
                    <img src="{{ asset('To-do-app/images/logo.476fe07d.svg') }}" alt="">
                    <h3>Todo App</h3>
                </div>
                <div class="nav-right">
                    <div class="user">
                        <div class="user-info">
                            <p class="user-info-name">huymanh98 <i class="fas fa-angle-down"></i></p>
                            <div class="dropdown-menu-user-info">
                                <ul>
                                    <li><a class="dropdown-menu-user-info-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-menu-user-info-item" href="{{ route('logout') }}">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="user-info-avatar">
                            <img src="{{ asset('To-do-app/images/avatar.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wp-content ">
        <div class="grid">
            <div class="row">
                <div class="l-2 m-3 c-0">
                    <div id="sidebar">
                        <div class="sidebar-title">
                            <p>Tasks managment</p>
                        </div>
                        <div class="sidebar-nav">
                            <ul>
                                <li class="sidebar-nav-item--active">
                                    <i class="fas fa-tasks sidebar-nav-icon"></i>
                                    <a href="" class="sidebar-nav-link">All Tasks</a>
                                </li>
                                <li>
                                    <i class="fas fa-lock sidebar-nav-icon"></i>
                                    <a href="" class="sidebar-nav-link">In Progess</a>
                                </li>
                                <li>
                                    <i class="fas fa-desktop sidebar-nav-icon"></i>
                                    <a href="" class="sidebar-nav-link">Completed</a>
                                </li>
                                <li>
                                    <i class="fas fa-desktop sidebar-nav-icon"></i>
                                    <a href="" class="sidebar-nav-link">Today</a>
                                </li>
                                <li>
                                    <i class="fas fa-desktop sidebar-nav-icon"></i>
                                    <a href="" class="sidebar-nav-link">Tommorow</a>
                                </li>
                                <li>
                                    <i class="fas fa-desktop sidebar-nav-icon"></i>
                                    <a href="" class="sidebar-nav-link">Month</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="l-10 m-9 c-12">
                    <div id="main-content">
                        <div class="main-content-head">
                            <div class="main-content-head__left">
                                <h3 class="main-content-head__left-title">All Tasks</h3>
                                <span class="main-content-head__left-number">(0)</span>
                            </div>
                            <div class="main-content-head__right">
                                <button type="button" class="btn btn-primary main-content-head__right--btn-add"><i class="fas fa-plus main-content-head__right--btn-add-icon"></i> New Task</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('To-do-app/js/main.js') }}"></script>
</body>

</html>
