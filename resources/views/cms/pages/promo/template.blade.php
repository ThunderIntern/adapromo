@extends('cms.template')
@section('content')
<div class="container-fluid">
	<div class="row clearfix">
		&nbsp;
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-lg-3">
		@include('cms.widgets.sidebar', [
			'title' 		=> 'Promo',
			'description' 	=> 'Pengaturan Promo',
			'components' => [
								'0' => ['link' => '#', 'caption' => 'Promo'],
		]])
		</div>
 
		<div class="col-xs-12 col-lg-9">
			<div class="row mb-s">
				<div class="col-sm-12">
					@yield('page_content')
				</div>
			</div>
		</div>
	</div>
</div>
@stop