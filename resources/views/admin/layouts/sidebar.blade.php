<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <div class="form-inline mr-auto"></div>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle m-auto">
                <div class="d-sm-none d-lg-inline-block">Hi, Sunil Adhikari</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ route('profile.edit') }}" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <div class="dropdown-divider"></div>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="#" onclick="event.preventDefault(); this.closest('form').submit();"
                        class="dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </form>
            </div>
        </li>
    </ul>
</nav>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">SA</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">SA</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item active">
                <a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Sections</li>
            <li>
                <a class="nav-link" href="{{ route('admin.hero.index') }}">
                    <i class="fas fa-columns"></i><span>Hero</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('admin.services.index') }}">
                    <i class="far fa-square"></i><span>Services</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('admin.about.index') }}">
                    <i class="far fa-square"></i><span>About</span>
                </a>
            </li>
          <li>
    <a class="nav-link" href="{{ route('admin.portfolio-item.index') }}">
        <i class="fas fa-columns"></i><span>Portfolio Item</span>
    </a>
</li>

        </ul>
    </aside>
</div>
