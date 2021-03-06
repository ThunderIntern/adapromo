@extends('web.template')
@section('navbar')
	@include('web.component.navbar')
@stop
@section('searchbar')
	@include('web.component.searchbar')
@stop
@section('content')
	
	<!-- premium -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12 text-xs-center p-b-2 p-t-3">
				<h4>HOT PROMO</h4>
			</div>
		</div>
	</div>
	<div class="container p-b-3">
		<div class="row">
			@forelse($page_datas->premium as $key => $premium)
				<div class="col-md-4 col-lg-4">
				  	<div class="card">
				  		{!! Html::image($premium['images']['image1'], null, ['class' => 'card-img-top img-fluid w-100 h-250']) !!}
						<div class="card-block">
							<h5 class="card-title h-50px">
								<a href="{{route('promo.detail', ['id' => $premium['id']])}}" class="dark-blue-text">
								<?php 
									$title = explode(' ', $premium['title']); 
									$length = count($title);
									for($i=0; $i<$length; $i++){
										echo $title[$i];
										if($i==5) break;
										echo ' ';
									}
									if($length>5) echo ' ...';
								?>
								</a>
							</h5>
							<div class="row">
								<div class="col-md-6 col-lg-6">
									<span class="tag dark-text"><i class="fa fa-heart"></i> Favorite</span>
								</div>
								<div class="col-md-6 col-lg-6 text-xs-right">
									<?php 
										$now = date("m/d/Y");
										if($now < $premium['extra_fields']['start_date'] || $now > $premium['extra_fields']['end_date']){
									?>
									<span class="tag grey dark-text">Iklan Tidak Aktif</span>
									<?php }else{ ?>
									<span class="tag dark-blue white-text">Iklan Aktif</span>
									<?php } ?>
									
								</div>
							</div>
							<p class="tag dark-text"><i class="fa fa-calendar"></i> {{ $premium['extra_fields']['start_date'] }} s/d {{ $premium['extra_fields']['end_date'] }}</p>
							<p class="card-text">
								<?php 
                                    $slug   = explode(' ', $premium['slug']); 
                                    $length = count($slug);
                                    for($i=0; $i<$length; $i++){
                                        echo $slug[$i];
                                        if($i==8) break;
                                        echo ' ';
                                    }
                                    if($length>8) echo ' ...';
                                ?>
							</p>
							<p class="card-text"><small class="dark-blue-text"><i class="fa fa-tag dark-blue-text"></i> {{ $premium['tags'] }}</small></p>
							<a href="{{route('promo.detail', ['id' => $premium['id']])}}" class="btn btn-block red white-text">Lihat Promo</a>
						</div>
				  	</div>
				</div>
			@empty
				<div class="col-md-4 col-lg-4">
				Tidak Ada Promo.
				</div>
			@endforelse
		</div>
	</div>
	<!-- end premium -->

	<!-- content -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12 text-xs-center p-b-2 p-t-3">
				<h4>PROMO LAINNYA</h4>
			</div>
		</div>
	</div>
	<div class="container p-b-3">
		<div class="row">
			@forelse($page_datas->datas as $key => $data)
				<div class="col-md-4 col-lg-4">
				  	<div class="card">
				  		{!! Html::image($data['images']['image1'], null, ['class' => 'card-img-top img-fluid w-100 h-250']) !!}
						<div class="card-block">
							<h5 class="card-title h-50px">
								<a href="{{route('promo.detail', ['id' => $data['id']])}}" class="dark-blue-text">
								<?php 
									$title = explode(' ', $data['title']); 
									$length = count($title);
									for($i=0; $i<$length; $i++){
										echo $title[$i];
										if($i==5) break;
										echo ' ';
									}
									if($length>5) echo ' ...';
								?>
								</a>
							</h5>
							<div class="row">
								<div class="col-md-6 col-lg-6">
									<span class="tag dark-text"><i class="fa fa-heart"></i> Favorite</span>
								</div>
								<div class="col-md-6 col-lg-6 text-xs-right">
									<?php 
										$now = date("m/d/Y");
										if($now < $data['extra_fields']['start_date'] || $now > $data['extra_fields']['end_date']){
									?>
									<span class="tag grey dark-text">Iklan Tidak Aktif</span>
									<?php }else{ ?>
									<span class="tag dark-blue white-text">Iklan Aktif</span>
									<?php } ?>
									
								</div>
							</div>
							<p class="tag dark-text"><i class="fa fa-calendar"></i> {{ $data['extra_fields']['start_date'] }} s/d {{ $data['extra_fields']['end_date'] }}</p>
							<p class="card-text">
								<?php 
                                    $slug   = explode(' ', $data['slug']); 
                                    $length = count($slug);
                                    for($i=0; $i<$length; $i++){
                                        echo $slug[$i];
                                        if($i==8) break;
                                        echo ' ';
                                    }
                                    if($length>8) echo ' ...';
                                ?>
							</p>
							<p class="card-text"><small class="dark-blue-text"><i class="fa fa-tag dark-blue-text"></i> {{ $data['tags'] }}</small></p>
							<a href="{{route('promo.detail', ['id' => $data['id']])}}" class="btn btn-block red white-text">Lihat Promo</a>
						</div>
				  	</div>
				</div>
			@empty
				<div class="col-md-4 col-lg-4">
				Tidak Ada Promo.
				</div>
			@endforelse
		</div>
		<div class="row">
			<div class="col-md-4 offset-md-4">
			  	<a href="{{route('promo')}}" class="btn btn-block red white-text m-t-2">Lihat Semua Promo</a>
			</div>
		</div>
	</div>
	<!-- end content -->
@stop
@section('footer')
	@include('web.component.footer')
@stop