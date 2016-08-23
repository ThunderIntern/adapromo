<!-- search --> 
<div class="container-fluid red">
	<div class="row">
		<div class="col-md-12">
		  	<div class="container hidden-md-up">
		  			<div class="row">
						<div class="col-md-12 col-lg-12">
							{!! Form::open(['class' => 'p-t-1', 'url' => route('search'), 'method' => 'post']) !!}
								<fieldset class="form-group">
									<div class="input-group">
										{!! Form::text('name', null, ['class' => 'form-control bg-danger white-text', 'placeholder' => 'ketikan nama promo']) !!}
										<div class="input-group-btn">
											{!! Form::submit('Search', ['class' => 'btn dark-blue white-text']) !!}
										</div>
									</div>
								</fieldset>
							{!! Form::close() !!}
						</div>
					</div>
			</div>
			<div class="container hidden-sm-down">
	  			{!! Form::open(['class' => 'p-y-1', 'url' => route('search'), 'method' => 'post']) !!}
			  		<div class="row">
		  				<div class="col-md-4 col-lg-4">
	  						{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ketik nama promo']) !!}	
		  				</div>
		  				<div class="col-md-2 col-lg-2">
	  						<select name="category" class="form-control">
	  							@foreach($page_datas->tags as $key => $data)
	  							<option value="{{ $data['tags'] }}">{{ $data['tags'] }}</option>
	  							@endforeach
	  						</select>
		  				</div>
		  				<div class="col-md-2 col-lg-2">
	  						{!! Form::text('date', date('m-d-Y'), ['class' => 'form-control icon-awesome-placeholder', 'placeholder' => '&#xf073; Tanggal', 'data-inputmask' => "'mask':'m/d/y'"]) !!}		
		  				</div>
		  				<div class="col-md-2 col-lg-2">
	  						<select name="sort" class="form-control">
	  							<option value="Terbaru">Terbaru</option>
	  							<option value="Terfavorite">Terfavorite</option>
	  						</select>
		  				</div>
		  				<div class="col-md-2 col-lg-2">
		  					<button type="submit" class="btn btn-block dark-blue white-text"><i class="fa fa-search"></i> Cari</button>
		  				</div>
			  		</div>
			  	{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
<!-- end search -->