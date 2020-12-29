<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="{{ route('admin_home') }}">
            <img src="{{ asset('assets')}}/admin/images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active">
                    <a class="js-arrow" href="{{ route('admin_menu') }}">
                        <i class="fas fa-table"></i>Menu</a>
                </li>
                <li class="active">
                    <a class="js-arrow" href="{{ route('admin_content') }}">
                        <i class="fas fa-chart-bar"></i>Content</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
