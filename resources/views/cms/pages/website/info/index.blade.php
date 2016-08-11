@extends('cms.pages.website.template')
@section('page_content')
<div class="card">
	<div class="card-block">
	<h3>Web Info</h3>
	@include('cms.widgets.alertbox')
	<div class="card-block">
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th class="col-md-1">#</th>
						<th class="col-md-4">Judul</th>
						<th class="col-md-5">Isi</th>
						<th class="col-md-2 text-xs-right">Control</th>
					</tr>
				</thead>
				<tbody>
					@forelse ($page_datas->datas as $key => $data)
						<tr>
							<td class="col-md-1">
								{{($page_datas->datas->perpage() * ($page_datas->datas->currentPage()-1)) + ($key + 1)}}
							</td>
							<td class="col-md-4">
								<a href="{{route('cms.website.info.show', ['id' => $data['id']])}}">
									{{ $data['content']['judul'] }}
								</a>
							</td>
							<td class="col-md-5">
								{{ $data['content']['Isi'] }}
							</td>
							<td class="col-md-2 text-xs-right">
						        <a href="{{route('cms.website.info.edit', ['id' => $data['id']])}}" class="btn btn-primary btn-sm">
									<i class="fa fa-pencil" aria-hidden="true"></i>
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
</div>
@stop

@section('modal')
	@include('cms.modals.delete')
@append