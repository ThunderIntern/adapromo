<div class="card static-sidemenu">
	@include('cms.widgets.components.title.title_description', [
		'component'		=> 	[
								'title'			=> $title,
								'description'	=> $description,
							]
	])
	<ul class="list-group list-group-flush">
		@forelse($components as $component)
		    @include("cms.widgets.components.sidebar.menu_list", $component)
		@empty
		    <p>There's no components provided. Please check documentation on ../widgets/sidebar</p>
		@endforelse
	</ul>
</div> 