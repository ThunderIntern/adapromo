@extends('cms.pages.website.template')
@section('page_content')

@if(is_null($page_datas->id))
	{!! Form::open(['url' => route('cms.website.faq.store'), 'method' => 'post' ]) !!}
@else
	{!! Form::open(['url' => route('cms.website.faq.update', ['id' => $page_datas->id]), 'method' => 'patch' ]) !!}
@endif
	<div class="card">
		@include('cms.widgets.alertbox')
		<div class="card-block">
			@include('cms.widgets.components.title.title_control', ['component' => [
				'title'			=> $page_attributes->page_title,
				'controls'		=> 	[
										'back'		=>	[
															'link'	=> route('cms.website.faq.index')
														],
										'save'		=> 	[
															'link'	=> route('cms.website.faq.store')
														]
									]
			]])

			
			<fieldset class="form-group">
				<label for="name">Pertanyaan</label>
				{!! Form::text('pertanyaan', $page_datas->datas['content']['pertanyaan'], ['class' => 'form-control', 'required' => 'required']) !!}
			</fieldset>
			<fieldset class="form-group">
				<label for="name">Jawaban</label>
				{!! Form::textarea('jawaban', $page_datas->datas['content']['jawaban'], ['class' => 'form-control', 'required' => 'required', 'id' => 'myTextarea']) !!}
			</fieldset>
		</div>
	</div>
{!! Form::close() !!}
@stop