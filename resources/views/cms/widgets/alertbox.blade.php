@if(Session::has('msg') || Session::has('msg-danger'))
	<div class="card-block" style="padding-top:0px;padding-bottom:0px;">
		<div class="row">
		    <div class="col-lg-12">
		    	@if(Session::has('msg'))
		        <div class="alert alert-success alert-dismissable m-b-none" style="margin-top: 0px;margin-bottom:0px">
		        @else
		        <div class="alert alert-danger alert-dismissable m-b-none" style="margin-top: 0px;margin-bottom:0px">
		        @endif
		            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	                @if(Session::has('msg') || Session::has('msg-danger'))
		                {!!Session::get('msg')!!}
		                {!!Session::get('msg-danger')!!}

		                @if(Session::has('msg-action') && Session::has('msg-title'))
		                	<a href="{!! Session::get('msg-action') !!}">
		                		{!! Session::get('msg-title') !!}
		                	</a>
		                @endif
	                @endif
		        </div>
		    </div>
		</div>
	</div>
@endif