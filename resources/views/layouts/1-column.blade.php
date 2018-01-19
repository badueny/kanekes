<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('includes.head')
    </head>
    <body class="@yield('body_class')">

		@yield('section_top')
		
        <main>
            @yield('main_content')
        </main>
		
		@yield('section_bottom')

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
