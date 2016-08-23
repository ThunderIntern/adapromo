@extends('cms.pages.users.template')
@section('page_content')

@if(is_null($page_datas->id))
	{!! Form::open(['url' => route('cms.users.store'), 'method' => 'post' ]) !!}
@else
	{!! Form::open(['url' => route('cms.users.update', ['id' => $page_datas->id]), 'method' => 'patch' ]) !!}
@endif
	<div class="card">
		<br>
		@include('cms.widgets.alertbox')
		<div class="card-block">
			@include('cms.widgets.components.title.title_control', ['component' => [
				'title'			=> $page_attributes->page_title,
				'controls'		=> 	[
										'back'		=>	[
															'link'	=> route('cms.users.index')
														],
										'save'		=> 	[
															'link'	=> route('cms.users.store')
														]
									]
			]])

			
			<fieldset class="form-group">
				<label for="name">Name</label>
				{!! Form::text('name', $page_datas->datas['name'], ['class' => 'form-control']) !!}
			</fieldset>
			<fieldset class="form-group">
				<label for="name">Email</label>
				{!! Form::email('email', $page_datas->datas['email'], ['class' => 'form-control']) !!}
			</fieldset>
			<fieldset class="form-group">
				<label for="name">Date of Birth</label>
				{!! Form::date('dob', $page_datas->datas['dob'], ['class' => 'form-control', 'data-inputmask' => "'mask':'m/d/y'"])!!}
				<small>format: mm/dd/yyyy</small>
			</fieldset> 
			<fieldset class="form-group">
				<label for="name">Role</label>
				{{ Form::select('role', ['admin' => 'Admin', 'editor' => 'Editor'], $page_datas->datas['role'], ['class' => 'form-control c-select']) }}
			</fieldset>
			@if(is_null($page_datas->id))
			<fieldset class="form-group">
				<label for="name">Password</label>
				{!! Form::password('password', ['class' => 'form-control']) !!}
			</fieldset>
			<fieldset class="form-group">
				<label for="name">Konfirmasi Password</label>
				{!! Form::password('password2', ['class' => 'form-control']) !!}
			</fieldset>
			@endif
			
		</div>
	</div>
{!! Form::close() !!}
@stop