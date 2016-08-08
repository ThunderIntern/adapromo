<!-- footer --> 
<footer class="container-fluid">
	<div class="row hidden-md-up">
		<hr>
		<center>
			NEWSLETTER<br>
			<small class="text-muted">Dapatkan informasi promo-promo terbaru dengan subscribe email anda.</small>
			{!! Form::open() !!}
				<div class="col-md-12 col-lg-12">
						{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'alamat email anda']) !!}
						{!! Form::submit('Subscribe', ['class' => 'btn red white-text', "style" => "width:100%"]) !!}
				</div>				
			{!! Form::close() !!}
		</center>
	</div>
	<div class="row grey-soft">
		<div class="col-md-12">
		  	<div class="container">
				<div class="row text-sm-center text-md-left m-t-2">
					<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hidden-sm-down">
						{!! Html::image('images/adapromologo.png', null, ['class' => 'img-fluid']) !!}
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 hidden-sm-down">
						<h6 class="font-weight-bold">PT. ADA PROMO</h6>
						<p>
							THE CEO BUILDING, Lt 12<br/>
							Jln. TB Simatupang No. 18c<br/>
							Jakarta Selatan, 12430, Indonesia<br/>
							contact[at].adapromo.id
						</p>
						<p>
							<a href="#">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x facebook-text"></i>
									<i class="fa fa-facebook fa-stack-1x white-text"></i>
								</span>
							</a>
							<a href="#">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x twitter-text"></i>
									<i class="fa fa-twitter fa-stack-1x white-text"></i>
								</span>
							</a>
						</p>
					</div>
					<div class="hidden-md-up">
					<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hidden-md-up">
						<br><center>{!! Html::image('images/adapromologo.png', null, ['class' => 'img-fluid']) !!}</center>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<center>
						<h6 class="font-weight-bold">PT. ADA PROMO</h6>
						<p>
							THE CEO BUILDING, Lt 12<br/>
							Jln. TB Simatupang No. 18c<br/>
							Jakarta Selatan, 12430, Indonesia<br/>
							contact[at].adapromo.id
						</p>
						<p>
							<a href="#">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x facebook-text"></i>
									<i class="fa fa-facebook fa-stack-1x white-text"></i>
								</span>
							</a>
							<a href="#">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x twitter-text"></i>
									<i class="fa fa-twitter fa-stack-1x white-text"></i>
								</span>
							</a>
						</p>
						</center>
					</div>
					</div>
					<div class="col-md-3 col-lg-3 hidden-sm-down">
						<h6 class="font-weight-bold">Tentang ADAPROMO.ID</h6>
						<ul class="list-unstyled">
							<li><a href="#" class="dark-text">About US</a></li>
							<li><a href="#" class="dark-text">Contact US</a></li>
							<li><a href="#" class="dark-text">FAQ</a></li>
							<li><a href="#" class="dark-text">Syarat dan Ketentuan</a></li>
							<li><a href="#" class="dark-text">Daftarkan Promosi Anda</a></li>
						</ul>
					</div>
					<div class="col-md-4 col-lg-4 hidden-sm-down">
						<div class="row hidden-md-down">
							<div class="col-md-12 col-lg-12">
							  	<h6 class="font-weight-bold">Newsletter</h5>
							</div>
						</div>
						<div class="row hidden-md-down">
							<div class="col-md-12 col-lg-12">
								{!! Form::open() !!}
									<fieldset class="form-group">
										<div class="input-group">
										  	{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'alamat email anda']) !!}
											<div class="input-group-btn">
												{!! Form::submit('Subscribe', ['class' => 'btn red white-text']) !!}
											</div>
										</div>
										<small class="text-muted">Dapatkan informasi promo-promo terbaru dengan subscribe email anda.</small>
									</fieldset>
								{!! Form::close() !!}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row dark white-text">
		<div class="col-md-12 col-lg-12">
			<div class="container">
		  		<div class="row">
					<div class="col-md-12 col-lg-12">
					  	&copy; 2105 - 2016 adapromo.id
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- end footer -->