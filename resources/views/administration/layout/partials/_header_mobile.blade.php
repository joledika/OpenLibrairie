<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="index.html">
                    <img style="width:30%" src="{{asset('icons/favicon.png')}}" alt="{{env('APP_NAME')}}" />
                    <span class="ml-3" style="color:teal">{{ env('APP_NAME') }}</span>
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">

                <li class="active has-sub">
                    <a class="js-arrow" href="#">
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
        </div>
    </nav>
</header>
