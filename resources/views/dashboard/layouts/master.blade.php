<!DOCTYPE html>
<html lang="en">
@include('dashboard.layouts.main-head')
<body>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        @include('dashboard.layouts.main-nav')
        @include('dashboard.layouts.sidebar')
        <!-- Main Content -->
        @yield('content')
        @include('dashboard.layouts.main-footer')
    </div>
</div>

@include('dashboard.layouts.scripts')
</body>
</html>
