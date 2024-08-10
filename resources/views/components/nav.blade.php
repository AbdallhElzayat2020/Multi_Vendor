<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">Abdallh</a>
        </div>
        <ul class="sidebar-menu">
            @foreach ($items as $item)
                {{--                <li class="{{Route::is($item['active']) ? 'active' : ''}}"> --}}
                <li class="{{ $item['route'] == $active ? 'active' : '' }}">
                    <a href="{{ route($item['route']) }}" class="nav-link ">
                        <i class="{{ $item['icon'] }} mr-3"></i><span>{{ $item['title'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>

    </aside>
</div>
