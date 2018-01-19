<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">@yield('navbar-title')</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#non">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#non">Link</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/admin">Admin page</a>
                </li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Layout
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">1 Column</a>
						<a class="dropdown-item" href="/2-column-left-example">2 Column (left sidebar)</a>
						<a class="dropdown-item" href="/2-column-right-example">2 Column (right sidebar)</a>
						<a class="dropdown-item" href="/3-column-example">3 Column</a>
					</div>
				 </li>
            </ul>
        </div>
    </div>
</nav>
