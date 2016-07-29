<!-- search --> 
<div class="container-fluid red">
	<div class="row">
		<div class="col-md-12">
		  	<div class="container">
	  			{!! Form::open(['class' => 'p-a-1']) !!}
			  		<div class="row">
		  				<div class="col-md-4 col-lg-4">
	  						{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ketik nama promo']) !!}	
		  				</div>
		  				<div class="col-md-2 col-lg-2">
	  						{!! Form::text('location', null, ['class' => 'form-control icon-awesome-placeholder', 'placeholder' => '&#xf041; Lokasi']) !!}	
		  				</div>
		  				<div class="col-md-2 col-lg-2">
	  						{!! Form::text('category', null, ['class' => 'form-control icon-awesome-placeholder', 'placeholder' => '&#xf02b; Kategori']) !!}	
		  				</div>
		  				<div class="col-md-2 col-lg-2">
	  						{!! Form::text('date', null, ['class' => 'form-control icon-awesome-placeholder', 'placeholder' => '&#xf073; Tanggal']) !!}		
		  				</div>
		  				<div class="col-md-2 col-lg-2">
		  					<button type="submit" class="btn dark-blue white-text"><i class="fa fa-search"></i> Cari</button>
		  				</div>
			  		</div>
			  	</div>
  			{!! Form::close() !!}		
		</div>
	</div>
</div>
<!-- end search -->