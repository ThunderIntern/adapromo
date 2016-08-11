@if(Session::has('msg'))
	                @if(Session::has('msg'))
		                <div class="alert alert-success m-x-2" role="alert">{!!Session::get('msg')!!}</div>
		                @if(Session::has('msg-action') && Session::has('msg-title'))
		                	<a href="{!! Session::get('msg-action') !!}">
		                		{!! Session::get('msg-title') !!}
		                	</a>
		                @endif
	                @endif
@endif