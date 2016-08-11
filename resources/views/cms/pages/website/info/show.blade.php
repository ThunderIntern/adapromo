@extends('cms.pages.website.template')
@section('page_content')

<div class="card">
	<div class="card-block">
	@include('cms.widgets.components.title.title_control', ['component' => [
		'title'			=> 'Detail Web Info',
		'controls'		=> 	[
								'back'		=>	[
													'link'	=> route('cms.website.info.index')
												],
								'edit'		=>	[
													'link'	=> route('cms.website.info.edit', ['id'=> $page_datas->id] )
												],												
							]		
	]])
	</div>
	@include('cms.widgets.alertbox')
	<div class="card-block">
		@include('cms.widgets.components.detail.detail-text',['component' => [
			'title'		=> 'Judul',
			'content'	=>  ucfirst($page_datas->datas['content']['judul'])
		]])
		@include('cms.widgets.components.detail.detail-text',['component' => [
			'title'		=> 'Isi',
			'content'	=>  ucfirst($page_datas->datas['content']['Isi'])
		]])			
	</div>
</div>
@stop