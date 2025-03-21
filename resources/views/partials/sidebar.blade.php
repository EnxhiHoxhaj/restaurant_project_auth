@php
    $sidebar = config('aside.side_bar');
@endphp

<nav class="navbar-dark bg-dark px-3 px-xxl-4 d-flex sidebar-conatiner">
    <menu class="navbar-nav mt-3">
        @foreach ($sidebar as $link)
            <li>
                <a href="{{ isset($link['route_name']) ? route($link['route_name']) : '#' }}"
                    class="d-flex gap-2 nav-link position-relative
                    @if (isset(explode('.', Route::currentRouteName())[1]) &&
                            isset($link['route_name']) &&
                            explode('.', Route::currentRouteName())[1] == explode('.', $link['route_name'])[1]
                    ) active @endif">

                    <div class="flex-shrink-0">
                        {!! $link['menu_icon'] !!}
                    </div>

                    <div class="flex-shrink-0 d-none d-md-block overflow-hidden link-text">
                        {{ $link['menu_text'] }}
                    </div>

                    <!-- Fade -->
                    <div class="d-none d-md-block position-absolute top-0 end-0 w-25 h-100 text-fade"></div>
                </a>
            </li>
        @endforeach
    </menu>
</nav>
