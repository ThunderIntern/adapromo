@if(!is_null(Session::get('admin')))
    <script>
        window.location.href = '{{route("cms.home")}}'; 
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
        <div class="container-fluid">
			<div class="row clearfix">
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border-all p-x-1 p-y-2">
						<a href="{{route('home')}}"> {!! Html::image('images/adapromologo-login.jpg', null, ['class' => 'img-fluid p-y-2 p-x-3'] ) !!} </a>
						@if(Session::has('message-danger'))
							<center><div class="alert alert-danger">{{Session::get('message-danger')}}</div></center>
						@endif
						@if(Session::has('message-success'))
							<center><div class="alert alert-success">{{Session::get('message-success')}}</div></center>
						@endif
						{!! Form::open(['method' => 'post', 'url' => route('cms.login.process')]) !!}
							{!! Form::text('username', null, ['class' => 'form-control p-y-1 m-y-1', 'placeholder' => 'Username', 'required' => 'required']) !!}
							{!! Form::password('password', ['class' => 'form-control p-y-1 m-y-1', 'placeholder' => 'Password', 'required' => 'required']) !!}
							<button type="submit" class="btn btn-primary btn-block p-y-1">LOGIN</button>
						{!! Form::close() !!}
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				</div>
			</div>
		</div>
    </body>
    {!! Html::script(elixir('js/appcms.js')) !!}
    <script>
        @yield('scripts')
    </script>
</html>