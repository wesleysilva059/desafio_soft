<div id="sidebar-disable" class="sidebar-disable hidden"></div>

<div id="sidebar" class="sidebar-menu transform -translate-x-full ease-in">
    <div class="flex items-center justify-center mt-4">
        <div class="flex items-center">
            <span class="text-white text-2xl mx-2 font-semibold">List Books</span>
        </div>
    </div>
    <nav class="mt-4">
            <a class="nav-link{{ request()->is('admin/books*') ? ' active' : '' }}" href="{{ route('admin.books.index') }}">
                <i class="fa-fw fas fa-book">

                </i>

                <span class="mx-4">Livros</span>
            </a>
            <a class="nav-link{{ request()->is('admin/climate*') ? ' active' : '' }}" href="{{ route('admin.climate.index') }}">
                <i class="fa-fw fas fa-cloud">

                </i>

                <span class="mx-4">Clima</span>
            </a>
        <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
            <i class="fa-fw fas fa-sign-out-alt">

            </i>

            <span class="mx-4">Logout</span>
        </a>
    </nav>
</div>
