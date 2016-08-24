@extends('cms.pages.website.template')
@section('page_content')

@if(is_null($page_datas->id))
	{!! Form::open(['url' => route('cms.website.info.store'), 'method' => 'post' ]) !!}
@else
	{!! Form::open(['url' => route('cms.website.info.update', ['id' => $page_datas->id]), 'method' => 'patch' ]) !!}
@endif
	<div class="card">
		@include('cms.widgets.alertbox')
		<div class="card-block">
			@include('cms.widgets.components.title.title_control', ['component' => [
				'title'			=> $page_attributes->page_title,
				'controls'		=> 	[
										'back'		=>	[
															'link'	=> route('cms.website.info.index')
														],
										'save'		=> 	[
															'link'	=> route('cms.website.info.store')
														]
									]
			]])

			
			<fieldset class="form-group">
				<label for="name">Judul</label>
				{!! Form::text('judul', $page_datas->datas['content']['judul'], ['class' => 'form-control', 'required' => 'required']) !!}
			</fieldset>
			<fieldset class="form-group">
				<label for="name">Isi</label>
				{!! Form::textarea('Isi', $page_datas->datas['content']['Isi'], ['class' => 'form-control', 'required' => 'required', 'id' => 'myTextarea']) !!}
				{!! Form::hidden('name', $page_datas->datas['content']['name'], ['class' => 'form-control']) !!}
			</fieldset>
		</div>
	</div>
{!! Form::close() !!}
@stop