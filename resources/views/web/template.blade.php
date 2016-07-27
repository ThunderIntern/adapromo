<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        {!! Html::style(elixir('css/app.css')) !!}
        <link rel="stylesheet" href="<?php echo asset('http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'); ?>" />
    </head>
    <body>
    
    @yield('navbar')
    @yield('navbar-no-background')
    @yield('navbar-red')
    @yield('searchbar')
    @yield('content')
    @yield('footer')
    @yield('simple-footer')
    
    </body>
    {!! Html::script(elixir('js/app.js')) !!}
    <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                $('#example1').datepicker({
                    format: "dd/mm/yyyy"
                });  
            
            });
    </script>
</html>