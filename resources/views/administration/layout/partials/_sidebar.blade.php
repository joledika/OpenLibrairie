<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img style="width:30%" src="{{asset('icons/favicon.png')}}" alt="{{env('APP_NAME')}}" />
            <span class="ml-3" style="color:teal">{{ env('APP_NAME') }}</span>
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="{{ route('admin_home_path') }}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>

                </li>
                <li>
                    <a href="chart.html">
                        <i class="fas fa-users"></i>Membres</a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="fas fa-book"></i>Livres</a>
                </li>
                <li>
                    <a href="form.html">
                        <i class="far fa-comments"></i>Messages</a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-envelope"></i>Mails</a>
                </li>
                <li>
                    <a href="map.html">
                        <i class="fas fa-user"></i>Comptes</a>
                </li>

            </ul>
        </nav>
    </div>
</aside>
