@extends('cms.pages.tags.template')
@section('page_content')

<div class="card">
	<div class="card-block">
	@include('cms.widgets.components.title.title_control', ['component' => [
		'title'			=> 'Detail Tags',
		'controls'		=> 	[
								'back'		=>	[
													'link'	=> route('cms.tags.index')
												],
								'edit'		=>	[
													'link'	=> route('cms.tags.edit', ['id'=> $page_datas->id] )
												],												
								'delete'	=> 	[
													'link'	=> route('cms.tags.destroy', ['id' => $page_datas->id])
												],
							]		
	]])
	</div>
	@include('cms.widgets.alertbox')
	<div class="card-block">
		@include('cms.widgets.components.detail.detail-text',['component' => [
			'title'		=> 'Tags Name',
			'content'	=>  ucfirst($page_datas->datas['tags'])
		]])
		@include('cms.widgets.components.detail.detail-text',['component' => [
			'title'		=> 'Tags Type',
			'content'	=>  ucfirst($page_datas->datas['type'])
		]])
	</div>
</div>
@stop