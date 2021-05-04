<div id="sidebar">
    <div class="sidebar-title">
        <p>Tasks managment</p>
    </div>
    <div class="sidebar-nav">
        <ul>
            <li class="{{ Request::is('/') == '/' ? 'sidebar-nav-item--active' : ''}}">
                <i class="fas fa-tasks sidebar-nav-icon"></i>
                <a href="{{ route('home') }}" class="sidebar-nav-link">All Tasks</a>
            </li>
            <li class="{{ Request::is('in-progress') == 'in-progress' ? 'sidebar-nav-item--active' : ''}}">
                <i class="fas fa-lock sidebar-nav-icon"></i>
                <a href="{{ route('in-progress') }}" class="sidebar-nav-link">In Progress</a>
            </li>
            <li class="{{ Request::is('completed') == 'completed' ? 'sidebar-nav-item--active' : ''}}">
                <i class="fas fa-desktop sidebar-nav-icon"></i>
                <a href="{{ route('completed') }}" class="sidebar-nav-link">Completed</a>
            </li>
            <li class="{{ Request::is('today') == 'today' ? 'sidebar-nav-item--active' : ''}}">
                <div class="date-icon">0</div>
                <a href="{{ route('today') }}" class="sidebar-nav-link">Today</a>
            </li>
            <li class="{{ Request::is('tomorow') == 'tomorow' ? 'sidebar-nav-item--active' : ''}}">
                <div class="date-icon">1</div>
                <a href="{{ route('tomorow') }}" class="sidebar-nav-link">Tomorow</a>
            </li>
            <li class="{{ Request::is('month') == 'month' ? 'sidebar-nav-item--active' : ''}}">
                <div class="date-icon">30</div>
                <a href="{{ route('month') }}"  class="sidebar-nav-link">Month</a>
            </li>
        </ul>
    </div>
</div>
