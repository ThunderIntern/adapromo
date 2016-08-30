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
								'0' => ['link' => route('cms.promo.promo.index'), 'caption' => 'All Promo'],
								'1' => ['link' => route('cms.promo.premium.index'), 'caption' => 'Premium Promo'],
								'2' => ['link' => route('cms.promo.registered.index'), 'caption' => 'Registered Promo by User'],
								'3' => ['link' => route('cms.promo.request_premium.index'), 'caption' => 'Request Premium Promo by User']
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