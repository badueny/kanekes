<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('includes.head')
    </head>
    <body class="admin-page">
        <div class="admin-wrapper">
			@yield('navbar_and_sidebar');

            <div class="admin-content-wrap">
                <div class="admin-main">
                    @yield('main_content')
                </div>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
