@extends('web.template')
@section('content')
	<!-- content -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12 text-xs-center p-b-2 p-t-3">
				<h4>PROMO HARI INI</h4>
			</div>
		</div>
	</div>
	<div class="container p-b-3">
		<div class="row">
			@for ($x=1; $x<=6; $x++)
				<div class="col-md-4 col-lg-4">
				  	<div class="card">
				  		{!! Html::image('images/promo3.jpg', null, ['class' => 'card-img-top img-fluid']) !!}
						<div class="card-block">
							<h5 class="card-title">
								<a href="" class="dark-blue-text">Promo Daster Slim Matahari Mall 50%</a>
							</h5>
							<div class="row">
								<div class="col-md-6 col-lg-6">
									<span class="tag dark-text"><i class="fa fa-heart"></i> Favorite</span>
								</div>
								<div class="col-md-6 col-lg-6 text-xs-right">
									<span class="tag grey dark-text">Iklan Tidak Aktif</span>
								</div>
							</div>
							<p class="tag dark-text"><i class="fa fa-calendar"></i> 18-06-2016 s/d 20-07-2016</p>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<p class="card-text"><small class="dark-blue-text"><i class="fa fa-tag dark-blue-text"></i> Fashion</small></p>
							<a href="#" class="btn btn-block red white-text">Lihat Promo</a>
						</div>
				  	</div>
				</div>
			@endfor
		</div>
		<div class="row">
			<div class="col-md-4 offset-md-4">
			  	<a href="#" class="btn btn-block red white-text m-t-2">Lihat Semua Promo</a>
			</div>
		</div>
	</div>
	<!-- end content -->
@stop