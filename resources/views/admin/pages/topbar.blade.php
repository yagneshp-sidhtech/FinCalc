<div class="navbar-custom">
    <div class="topbar">
        <div class="topbar-menu d-flex align-items-center gap-1">
            <!-- Topbar Brand Logo -->
            <div class="logo-box">
                <!-- Brand Logo Light -->
                <a href="{{route('admin.dashboard')}}" class="sidhtechlogo">
                    <img src="{{asset('admin/assets/images/favicon.ico')}}" alt="sidhtechlogo" class="logo-lg" />
                    <img src="{{asset('admin/assets/images/favicon.ico')}}" alt="sidhtechlogo" class="logo-sm" />
                </a>
            </div>

            <!-- Sidebar Menu Toggle Button -->
            <button class="button-toggle-menu">
                <i class="mdi mdi-menu"></i>
            </button>
        </div>

        <ul class="topbar-menu d-flex align-items-center">
            <li class="dropdown">
                <span class="nav-link dropdown-toggle nav-user me-0">
                    <strong class="ms-1 d-none d-md-inline-block">
                        Welcome, {{ Auth::user()->name }}
                    </strong>
                    <a href="{{ route('admin.change.password') }}" class="btn btn-success m-2">Change Password</a>
                    <form action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger m-0">Logout</button>
                    </form>
                </span>
            </li>
        </ul>
    </div>
</div>
