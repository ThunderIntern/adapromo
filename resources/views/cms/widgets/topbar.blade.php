<!-- top liner -->
<nav class="navbar navbar-dark navbar-fixed-top navbar-full bg-primary bg-faded main-nav">
	<a class="navbar-brand" href="#">CMS Adapromo.id</a>
	<div class="nav navbar-nav">
		<a href="#" class="pull-xs-right nav-link" data-toggle="modal" data-target="#modalLogout">&nbsp;<i class="fa fa-sign-out"></i>Logout
		</a>
		<div class="pull-xs-right nav-link">{{ Session::get('username-admin') }} | </div>
	</div>
</nav>

<!-- second liner -->
<nav class="navbar navbar-fixed-top navbar-full bg-faded navbar2">
	<div class="nav navbar-nav">
		<ul class="list-inline">
			<li class="list-inline-item text-xs-center">
				<a href="{{ route('cms.home') }}" class="block p-y-1 p-x-0 ">
					<i class="fa fa-dashboard fa-2x fa-fw"></i><br>Dashboard
				</a>
			</li>
			<li class="list-inline-item text-xs-center">
				<a href="{{ route('cms.website.faq.index') }}" class="block p-y-1 p-x-0 ">
					<i class="fa fa-desktop fa-2x fa-fw"></i><br>Website
				</a>
			</li>
			<li class="list-inline-item text-xs-center">
				<a href="{{ route('cms.promo.promo.index') }}" class="block p-y-1 p-x-0 ">
					<i class="fa fa-list-alt fa-2x fa-fw"></i><br>Promo
				</a>
			</li>
			<li class="list-inline-item text-xs-center">
				<a href="{{ route('cms.tags.index') }}" class="block p-y-1 p-x-0 ">
					<i class="fa fa-tags fa-2x fa-fw"></i><br>Tags
				</a>
			</li>
			<li class="list-inline-item text-xs-center">
				<a href="{{ route('cms.users.index') }}" class="block p-y-1 p-x-0 ">
					<i class="fa fa-users fa-2x fa-fw"></i><br>User
				</a>
			</li>
			<li class="list-inline-item text-xs-center pull-right">
				<a href="{{ route('cms.account') }}" class="block p-y-1 p-x-0 ">
					<i class="fa fa-gear fa-2x fa-fw"></i><br>Settings
				</a>
			</li>
		</ul>
	</div>
</nav>