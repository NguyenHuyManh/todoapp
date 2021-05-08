<div id="header">
    <div class="grid">
        <div class="header-content">
            <div class="logo">
                <a href="{{url('/')}}">
                    <img src="{{ asset('To-do-app/images/logo.476fe07d.svg') }}" alt="">
                </a>
                <a href="{{url('/')}}">
                    <h3>Todo App</h3>
                </a>
            </div>
            <div class="nav-right">
                <div class="user">
                    <div class="user-info">
                        <p class="user-info-name">{{ Auth::user()->name }}<i class="fas fa-angle-down"></i></p>
                        <div class="dropdown-menu-user-info">
                            <ul>
                                <li><a class="dropdown-menu-user-info-item" href="{{ route('profile') }}">Profile</a>
                                </li>
                                <li><a class="dropdown-menu-user-info-item" href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="user-info-avatar">
                        @if (Auth::user()->avatar)
                        <img src="{{ asset('storage') }}/{{Auth::user()->avatar}}" alt="">
                        @else
                        <img src="{{ asset('To-do-app/images/avatar.png') }}" alt="">
                        @endif
                    </div>
                </div>
            </div>

            <label for="nav-bar-input" class="nav-bar-btn">
                <i class="fas fa-bars nav-bar-icon"></i>
            </label>

            <input type="checkbox" name="" id="nav-bar-input" class="nav-input">

            <label for="nav-bar-input" class="nav-overlay"></label>

            <div class="nav-bar-mobile">
                <div class="nav-bar-mobile__head">
                    <div class="logo">
                        <img src="{{ asset('To-do-app/images/logo.476fe07d.svg') }}" alt="">
                        <h3>Todo App</h3>
                    </div>
                    <label for="nav-bar-input" class="nav-bar-mobile__close">
                        <i class="fas fa-times nav-bar-mobile__close-icon"></i>
                    </label>
                </div>
                <ul class="nav-bar-mobile-list">
                    <li>
                        <a href="" class="nav-bar-mobile--link">
                            <i class="fas fa-tasks nav-bar-mobile--icon"></i>All Tasks
                        </a>
                    </li>
                    <li>
                        <a href="" class="nav-bar-mobile--link">
                            <i class="fas fa-lock nav-bar-mobile--icon"></i>In Progress
                        </a>
                    </li>
                    <li>
                        <a href="" class="nav-bar-mobile--link">
                            <i class="fas fa-desktop nav-bar-mobile--icon"></i>Completed
                        </a>
                    </li>
                    <li>
                        <div class="date-icon-nav-mobile">0</div>
                        <a href="" class="nav-bar-mobile--link">Today</a>
                    </li>
                    <li>
                        <div class="date-icon-nav-mobile">1</div>
                        <a href="" class="nav-bar-mobile--link">Tommorow</a>
                    </li>
                    <li>
                        <div class="date-icon-nav-mobile">30</div>
                        <a href="" class="nav-bar-mobile--link">Month</a>
                    </li>
                </ul>
                <ul class="nav-bar-mobile__user-info">
                    <li>Tài khoản</li>
                    <li>
                        <a href="" class="nav-bar-mobile--link">
                            <i class="fas fa-user-circle nav-bar-mobile--icon"></i>Profile
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" class="nav-bar-mobile--link">
                            <i class="fas fa-sign-out-alt nav-bar-mobile--icon"></i>Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>