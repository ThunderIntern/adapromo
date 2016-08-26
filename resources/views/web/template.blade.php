<!DOCTYPE html>
<html lang="id">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>{{ $page_attributes->page_title }}</title>
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
    @include('web.modals.logout')
	
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	{!! Html::script('js/tether.js') !!}
	{!! Html::script(elixir('js/appweb.js')) !!}
	<script type="text/javascript" src='//cdn.tinymce.com/4/tinymce.min.js'></script>
      <script type="text/javascript">
      tinymce.init({
        selector: '#myTextarea',
        theme: 'modern',
        width: 600,
        height: 300,
        plugins: [
          'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
          'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
          'save table contextmenu directionality emoticons template paste textcolor'
        ],
        content_css: 'css/content.css',
        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
      });
      </script>

	<script>
		$(document).ready(function(){
			adapromo.init();
		});
	</script>

	@yield('js')
</html>