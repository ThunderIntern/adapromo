<!DOCTYPE html>
<html lang="id">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Home</title>
		{!! Html::style(elixir('css/appweb.css')) !!}

		<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
	</head>
	<body>
	
	<!-- navbar -->
    @yield('navbar')
    @yield('navbar-red')

    <!-- searchbar -->
    @yield('searchbar')

    <!-- content -->
    @yield('content')

    <!-- footer -->
    @yield('footer')
    @yield('simple-footer')
	
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	{!! Html::script('js/tether.js') !!}
	{!! Html::script(elixir('js/appweb.js')) !!}

	<script>
		$(document).ready(function(){
			adapromo.init();
		});
	</script>

	@yield('js')
</html>