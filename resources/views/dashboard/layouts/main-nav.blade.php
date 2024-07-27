<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
            </li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                        class="fas fa-search"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{asset('assets/dashboard/img/avatar/avatar-1.png')}}"
                     class="rounded-circle mr-1">
                @auth()
                    <div class="d-sm-none d-lg-inline-block">{{Auth::user()->name}}</div>
                @endauth
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                @auth()
                    <a href="#" class="dropdown-item has-icon">
                        <i class="far fa-user"></i> Profile {{Auth::user()->name}}
                    </a>
                @endauth
                <a href="" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Settings
                </a>
                <div class="dropdown-divider"></div>
                <form action="{{route('logout')}}" method="post">
                    {{--                    <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
                    {{--                    {{@csrf_field()}}--}}
                    @csrf
{{--                    @method('post')--}}
                    <button type="submit" class="dropdown-item has-icon text-danger">
                        Logout
                    </button>
                </form>
            </div>
        </li>
    </ul>
</nav>
