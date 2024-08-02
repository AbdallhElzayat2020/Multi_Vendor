<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">Abdallh</a>
        </div>

        <ul class="sidebar-menu">
            <li class="menu-header">Protfolio</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class=active><a class="nav-link" href="{{route('dashboard.dashboard')}}">Home</a></li>
                </ul>
            </li>
            <li class="dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Categories</span></a>
                <ul class="dropdown-menu">
                    <li class=active><a class="nav-link" href="{{route('dashboard.categories.index')}}">Categories</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
