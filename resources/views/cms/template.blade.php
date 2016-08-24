@if(is_null(Session::get('admin')))
    <script>
        window.location.href = '{{route("cms.login")}}'; 
    </script>
@endif
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		{!! Html::style(elixir('css/appcms.css')) !!}
        <title>{{ $page_attributes->page_title }}</title>
    </head>

    <body>
        @include('cms.widgets.topbar')
        @yield('content')
		@yield('modal')
        @include('cms.modals.logout')
    </body>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    {!! Html::script(elixir('js/appcms.js')) !!}
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
        @yield('scripts')
    </script>
</html>
