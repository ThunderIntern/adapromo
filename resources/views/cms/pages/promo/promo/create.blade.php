@extends('cms.pages.promo.template')
@section('page_content')

@if(is_null($page_datas->id))
	{!! Form::open(['url' => route('cms.promo.promo.store'), 'method' => 'post' ]) !!}
@else
	{!! Form::open(['url' => route('cms.promo.promo.update', ['id' => $page_datas->id]), 'method' => 'patch' ]) !!}
@endif
	<div class="card">
		@include('cms.widgets.alertbox')
		<div class="card-block">
			@include('cms.widgets.components.title.title_control', ['component' => [
				'title'			=> $page_attributes->page_title,
				'controls'		=> 	[
										'back'		=>	[
															'link'	=> route('cms.promo.promo.index')
														],
										'save'		=> 	[
															'link'	=> route('cms.promo.promo.store')
														]
									]
			]])

			
			<fieldset class="form-group">
				<label for="name">Title</label>
				{!! Form::text('title', $page_datas->datas['title'], ['class' => 'form-control', 'required' => 'required']) !!}
			</fieldset>
			<fieldset class="form-group">
				<label for="name">Slug</label>
				{!! Form::text('slug', $page_datas->datas['slug'], ['class' => 'form-control', 'required' => 'required']) !!}
			</fieldset>
			<fieldset class="form-group">
				<label for="name">Description</label>
				{!! Form::textarea('description', $page_datas->datas['description'], ['class' => 'form-control', 'rows' => '5', 'id' => 'myTextarea']) !!}
			</fieldset>
			<fieldset class="form-group" id="image">
				<label for="name">Images</label>
				{!! Form::url('images1', $page_datas->datas['image'], ['class' => 'form-control', 'required' => 'required']) !!}
			</fieldset>		
			<a onclick="addImage();" id="add" class="btn btn-secondary"><i class="fa fa-plus"></i> Add new image</a>
			<fieldset class="form-group">
				<label for="name">Tags</label>
				<select name="tags" class="form-control">
				@foreach($page_datas->tags as $key => $tags)
					<option value="{{ $tags['tags'] }}" <?php if($page_datas->datas['tags']==$tags['tags']) echo 'selected' ?>>{{ $tags['tags'] }}</option>
				@endforeach
				</select>
			</fieldset>
			<fieldset class="form-group">
				<label for="name">Type</label>
				{!! Form::text('type', $page_datas->datas['type'], ['class' => 'form-control', 'required' => 'required']) !!}
			</fieldset>
			<fieldset class="form-group">
				<label for="name">Start Date</label>
				{!! Form::date('start_date', $page_datas->datas['extra_fields']['start_date'], ['class' => 'form-control', 'data-inputmask' => "'mask':'m/d/y'", 'required' => 'required']) !!}
				<small>format: mm/dd/yyyy</small>
			</fieldset>
			<fieldset class="form-group">
				<label for="name">End Date</label>
				{!! Form::date('end_date', $page_datas->datas['extra_fields']['end_date'], ['class' => 'form-control', 'data-inputmask' => "'mask':'m/d/y'", 'required' => 'required']) !!}
				<small>format: mm/dd/yyy</small>
			</fieldset>
			<fieldset class="form-group">
				<label for="name">User</label>
				<select name="users" class="form-control">
				@foreach($page_datas->users as $key => $users)
					<option value="{{ $users['email'] }}" <?php if($page_datas->datas['users']==$users['name']) echo 'selected' ?>>{{ $users['name'] }}</option>
				@endforeach
				</select>
			</fieldset>
			{!! Form::hidden('favorites', $page_datas->datas['extra_fields']['favorites'], ['class' => 'form-control']) !!}
		</div>
	</div>
{!! Form::close() !!}
@stop
<script type="text/javascript">
	var count = 2;
	function addImage(){
		document.getElementById('image').innerHTML += "<input class='form-control' name='images"+count+"' type='url'>";
		count++;
		if(count>3){
			$('#add').hide();
		}
	}
</script>