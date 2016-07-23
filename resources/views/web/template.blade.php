<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        {!! Html::script(elixir('js/app.js')) !!}
        {!! Html::style(elixir('css/app.css')) !!}
        <link rel="stylesheet" href="<?php echo asset('http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'); ?>" />
    </head>
    <body>
    
    @yield('navbar')
    @yield('searchbar')
    @yield('content')
    @yield('footer')
    
    </body>
    <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#example1').datepicker({
                    format: "dd/mm/yyyy"
                });  
            
            });
    </script>
</html>