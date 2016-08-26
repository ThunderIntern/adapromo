@extends('cms.pages.tags.template')
@section('page_content')

@if(is_null($page_datas->id))
	{!! Form::open(['url' => route('cms.tags.store'), 'method' => 'post' ]) !!}
@else
	{!! Form::open(['url' => route('cms.tags.update', ['id' => $page_datas->id]), 'method' => 'patch' ]) !!}
@endif
	<div class="card">
		<br>
		@include('cms.widgets.alertbox')
		<div class="card-block">
			@include('cms.widgets.components.title.title_control', ['component' => [
				'title'			=> $page_attributes->page_title,
				'controls'		=> 	[
										'back'		=>	[
															'link'	=> route('cms.tags.index')
														],
										'save'		=> 	[
															'link'	=> route('cms.tags.store')
														]
									]
			]])

			
			<fieldset class="form-group">
				<label for="name">Tags Name</label>
				{!! Form::text('tags', $page_datas->datas['tags'], ['class' => 'form-control', 'required' => 'required']) !!}
			</fieldset>
			<fieldset class="form-group">
				<label for="name">Tags Type</label>
				{!! Form::text('type', $page_datas->datas['type'], ['class' => 'form-control', 'required' => 'required']) !!}
			</fieldset>
		</div>
	</div>
{!! Form::close() !!}
@stop