<nav class="admin-navbar navbar navbar-expand-md navbar-dark bg-primary d-flex flex-nowrap justify-content-start">
    <button class="btn btn-light btn-sm" type="button" data-toggle="admin-sidebar" aria-label="Toggle navigation">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </button>
    <a class="navbar-brand px-3 ml-2" href="/">@yield('navbar-title')</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link nav-link-icon-badge" href="#">
                    <span class="sr-only">Messages</span>
                    <span class="admin-navbar-icon-badge">
                        <i class="fa fa-envelope fa-lg" aria-hidden="true"></i>
                        <span class="badge badge-info">10</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-icon-badge" href="#">
                    <span class="sr-only">Notifications</span>
                    <span class="admin-navbar-icon-badge">
                        <i class="fa fa-bell fa-lg" aria-hidden="true"></i>
                        <span class="badge badge-info">15</span>
                    </span>
                </a>
            </li>
        </ul>
    </div>
</nav>
