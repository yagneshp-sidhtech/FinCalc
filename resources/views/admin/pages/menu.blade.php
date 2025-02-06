<div class="app-menu">
    <!-- Brand Logo -->
    <div class="logo-box">
        <!-- Brand Logo Dark -->
        <a href="{{ route('admin.dashboard') }}" class="logo-dark">
            <img src="{{ asset('admin/assets/images/favicon.ico') }}" alt="" height="35">
        </a>
    </div>

    <!-- menu-left -->
    <div class="scrollbar">
        <!--- Menu -->
        <ul class="menu">
            <li class="menu-item {{ request()->is('admin/dashboard/*') ? 'menuitem-active' : '' }}">
                <a href="{{ route('admin.dashboard') }}" class="menu-link">
                    <span class="menu-icon"><i class="fa-solid fa-clipboard"></i></span>
                    <span class="menu-text"> Dashboard </span>
                </a>
            </li>
            <li class="menu-item {{ request()->is('admin/blog/*') ? 'menuitem-active' : '' }}">
                <a href="{{ route('admin.blog.index') }}" class="menu-link">
                    <span class="menu-icon"><i class="fa-solid fa-blog"></i></span>
                    <span class="menu-text"> Blogs </span>
                </a>
            </li>
        </ul>
        <!--- End Menu -->
        <div class="clearfix"></div>
    </div>
</div>
