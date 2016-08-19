@extends('cms.pages.promo.template')
@section('page_content')
<div class="card">
	<div class="card-block">
	@include('cms.widgets.components.title.title_add_search', ['component' => [
		'title'			=> 'Promo ' . $page_datas->datas->currentPage(),
		'link-add'		=> route('cms.promo.promo.create'),
		'link-search'	=> '#',
	]])
	</div>
	@include('cms.widgets.alertbox')
	<div class="card-block">
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th class="col-md-1">#</th>
						<th class="col-md-3">Title</th>
						<th class="col-md-3">Slug</th>
						<th class="col-md-1">Favorites</th>
						<th class="col-md-2">Published at</th>
						<th class="col-md-2 text-xs-right">Control</th>
					</tr>
				</thead>
				<tbody>
					@forelse ($page_datas->datas as $key => $data)
						<tr>
							<td class="col-md-1">
								{{($page_datas->datas->perpage() * ($page_datas->datas->currentPage()-1)) + ($key + 1)}}
							</td>
							<td class="col-md-3">
								<a href="{{route('cms.promo.promo.show', ['id' => $data['id']])}}">
									{{ $data['title'] }}
								</a>
							</td>
							<td class="col-md-3">
								{{ $data['slug'] }}
							</td>
							<td class="col-md-1">
								{{ $data['extra_fields']['favorites'] }}
							</td>
							<td class="col-md-2">
								{{ $data['published_at'] }}
							</td>
							<td class="col-md-2 text-xs-right">
						        <a href="{{route('cms.promo.promo.edit', ['id' => $data['id']])}}" class="btn btn-primary btn-sm">
									<i class="fa fa-pencil" aria-hidden="true"></i>
						        </a>	
								<a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#modalDelete" data-action="{!! route('cms.promo.promo.destroy', ['id' => $data['id']]) !!}">
									<i class="fa fa-times" aria-hidden="true"></i>
								</a>
							</td>
						</tr>					
					@empty
						<tr>
							<td COLSPAN=4>
								Tidak ada data
							</td>
						</tr>
					@endforelse							
				</tbody>
			</table>
		</div>
	</div>

	<div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <center>{{ $page_datas->datas->links() }}</center>
            </div>
        </div>
    </div>
</div>
@stop

@section('modal')
	@include('cms.modals.delete')
@append