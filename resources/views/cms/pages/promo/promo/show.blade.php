@extends('cms.pages.promo.template')
@section('page_content')

<div class="card">
	<div class="card-block">
	@include('cms.widgets.components.title.title_control', ['component' => [
		'title'			=> 'Detail Promo',
		'controls'		=> 	[
								'back'		=>	[
													'link'	=> route('cms.promo.promo.index')
												],
								'edit'		=>	[
													'link'	=> route('cms.promo.promo.edit', ['id'=> $page_datas->id] )
												],												
								'delete'	=> 	[
													'link'	=> route('cms.promo.promo.destroy', ['id' => $page_datas->id])
												],
							]		
	]])
	</div>
	@include('cms.widgets.alertbox')
	<div class="card-block">
		@include('cms.widgets.components.detail.detail-text',['component' => [
			'title'		=> 'Promo Title',
			'content'	=>  ucfirst($page_datas->datas['title'])
		]])
		@include('cms.widgets.components.detail.detail-text',['component' => [
			'title'		=> 'Promo Slug',
			'content'	=>  ucfirst($page_datas->datas['slug'])
		]])
		@include('cms.widgets.components.detail.detail-text',['component' => [
			'title'		=> 'Promo Description',
			'content'	=>  ucfirst($page_datas->datas['description'])
		]])
		@include('cms.widgets.components.detail.detail-text',['component' => [
			'title'		=> 'Promo Tags',
			'content'	=>  ucfirst($page_datas->datas['tags'])
		]])
		@include('cms.widgets.components.detail.detail-text',['component' => [
			'title'		=> 'Promo Type',
			'content'	=>  ucfirst($page_datas->datas['type'])
		]])
		@include('cms.widgets.components.detail.detail-text',['component' => [
			'title'		=> 'Date',
			'content'	=>  ucfirst($page_datas->datas['extra_fields.start_date']." - ".$page_datas->datas['extra_fields.end_date'])
		]])
		@include('cms.widgets.components.detail.detail-text',['component' => [
			'title'		=> 'Users',
			'content'	=>  ucfirst($page_datas->datas['users'])
		]])
		@include('cms.widgets.components.detail.detail-date',['component' => [
			'title'		=> 'Publish Time',
			'content'	=>  $page_datas->datas['published_at']
		]])			
		@include('cms.widgets.components.detail.detail-date',['component' => [
			'title'		=> 'Last Time Update',
			'content'	=>  $page_datas->datas['updated_at']
		]])			
		@include('cms.widgets.components.detail.detail-date',['component' => [
			'title'		=> 'Create Time',
			'content'	=>  $page_datas->datas['created_at']
		]])

		@if(!is_null($page_datas->datas['bukti_pembayaran']))
			<div class="row">
				<div class="col-md-3"><span class="text-uppercase"><strong>Kode Pembayaran</strong></span></div>
				<div class="col-md-9">{{$page_datas->datas['kode_pembayaran']}}</div>
				<div class="col-md-12"><hr></div>
			</div>

			<div class="row">
				<div class="col-md-3"><span class="text-uppercase"><strong>Bukti Pembayaran</strong></span></div>
				<div class="col-md-9">
					@if(!is_null($page_datas->datas['bukti_pembayaran']))
					{{ Html::image("bukti_pembayaran/".$page_datas->datas['bukti_pembayaran']) }}
					@else
					Belum Upload Bukti Pembayaran.
					@endif
				</div>
			</div>
		@endif
	</div>
</div>
@stop