<h4 class="card-title">
	{{$component['title']}}
</h4>
<hr>

@if(isset($component['controls']['back']))
<a href="{{$component['controls']['back']['link']}}" class="btn btn-primary">
	<i class="fa fa-chevron-left"></i> 
	Back
</a>
@endif

@if(isset($component['controls']['save']))
<button type="submit" class="btn btn-primary pull-right">
	<i class="fa fa-save"></i>
	Save
</button>
@endif

@if(isset($component['controls']['delete']))
<a href="javascript:void(0);" class="btn btn-primary-outline pull-right ml-s" data-toggle="modal" data-target="#modalDelete" data-action="{{$component['controls']['delete']['link']}}">
	<i class="fa fa-trash"></i>
	Hapus
</a>

@section('modal')
	@include('cms.modals.delete')
@append

@endif

@if(isset($component['controls']['edit']))
<a href="{{$component['controls']['edit']['link']}}" class="btn btn-primary-outline pull-right ml-s">
	<i class="fa fa-pencil"></i>
	Edit
</a>
@endif



<hr class="thick">