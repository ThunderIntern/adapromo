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
    </body>
    {!! Html::script(elixir('js/appcms.js')) !!}
    <script>
        @yield('scripts')
    </script>
</html>
