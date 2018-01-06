<<<<<<< HEAD
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('includes.head')
    </head>
    <body class="@yield('body_class')">

		@yield('section_top')
		
        <main class="@yield('main_class')">
            @yield('main_content')
        </main>
		
		@yield('section_bottom')

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
=======
1-column.blade.php
>>>>>>> d3414e3c7974a315d2693de25ace91f33c27db0f
