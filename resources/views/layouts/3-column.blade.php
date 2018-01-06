<<<<<<< HEAD
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('includes.head')
    </head>
    <body class="@yield('body_class')">
        @yield('section_top')

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 order-md-2 mb-4">
					@yield('main_content')
				</div><!-- /col -->
				<div class="col-md-3 order-md-1 mb-4">
					@yield('sidebar_left')
				</div><!-- /col -->
				<div class="col-md-3 order-md-3 mb-4">
					@yield('sidebar_right')
				</div><!-- /col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->

        @yield('section_bottom')

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
=======
3-column.blade.php
>>>>>>> d3414e3c7974a315d2693de25ace91f33c27db0f
