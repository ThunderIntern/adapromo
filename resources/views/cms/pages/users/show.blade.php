@extends('cms.pages.users.template')
@section('page_content')

<div class="card">
	<div class="card-block">
	@include('cms.widgets.components.title.title_control', ['component' => [
		'title'			=> 'Detail User',
		'controls'		=> 	[
								'back'		=>	[
													'link'	=> route('cms.users.index')
												],
								'edit'		=>	[
													'link'	=> route('cms.users.edit', ['id'=> $page_datas->id] )
												],												
								'delete'	=> 	[
													'link'	=> route('cms.users.destroy', ['id' => $page_datas->id])
												],
							]		
	]])
	</div>
	@include('cms.widgets.alertbox')
	<div class="card-block">
		@include('cms.widgets.components.detail.detail-text',['component' => [
			'title'		=> 'Name',
			'content'	=>  ucfirst($page_datas->datas['name'])
		]])
		@include('cms.widgets.components.detail.detail-text',['component' => [
			'title'		=> 'Email',
			'content'	=>  ucfirst($page_datas->datas['email'])
		]])
		@include('cms.widgets.components.detail.detail-text',['component' => [
			'title'		=> 'Date of Birth',
			'content'	=>  ucfirst($page_datas->datas['dob'])
		]])
		@include('cms.widgets.components.detail.detail-text',['component' => [
			'title'		=> 'Role',
			'content'	=>  ucfirst($page_datas->datas['role'])
		]])
	</div>
</div>
@stop