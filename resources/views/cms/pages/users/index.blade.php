@extends('cms.pages.users.template')
@section('page_content')
<div class="card">
	<div class="card-block">
	@include('cms.widgets.components.title.title_add_search', ['component' => [
		'title'			=> 'Users ' . $page_datas->datas->currentPage(),
		'link-add'		=> route('cms.users.create'),
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
						<th class="col-md-2">Nama</th>
						<th class="col-md-3">Email</th>
						<th class="col-md-2">DoB</th>
						<th class="col-md-2">Role</th>
						<th class="col-md-2 text-xs-right">Control</th>
					</tr>
				</thead>
				<tbody>
					@forelse ($page_datas->datas as $key => $data)
						<tr>
							<td class="col-md-1">
								{{($page_datas->datas->perpage() * ($page_datas->datas->currentPage()-1)) + ($key + 1)}}
							</td>
							<td class="col-md-2">
								<a href="{{route('cms.users.show', ['id' => $data['id']])}}">
									{{ $data['name'] }}
								</a>
							</td>
							<td class="col-md-3">
								{{ $data['email'] }}
							</td>
							<td class="col-md-2">
								{{ $data['dob'] }}
							</td>
							<td class="col-md-2">
								{{ $data['role'] }}
							</td>
							<td class="col-md-2 text-xs-right">
						        <a href="{{route('cms.users.edit', ['id' => $data['id']])}}" class="btn btn-primary btn-sm">
									<i class="fa fa-pencil" aria-hidden="true"></i>
						        </a>	
								<a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#modalDelete" data-action="{!! route('cms.users.destroy', ['id' => $data['id']]) !!}">
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