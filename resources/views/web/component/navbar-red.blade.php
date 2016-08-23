<!-- menu -->
<nav class="navbar navbar-light red" style="line-height: 50px;">
    <div class="container">
        <a class="navbar-brand" href="#">
            {!! Html::image('images/adapromologo-white.png', null, ['class' => 'img-fluid'] ) !!}
        </a>
    <button class="navbar-toggler hidden-sm-up white-text" type="button" data-toggle="modal" data-target="#myModal2">
      &#9776;
    </button>
    <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
        <ul class="nav navbar-nav pull-xs-right">
            <li class="nav-item <?php if(Request::segment(1)=='home' || Request::segment(1)=='') echo 'active'; ?>">
                <a class="nav-link white-text m-r-2 p-b-0 w-100" href="{{route('home')}}"><strong>HOME</strong></a>
            </li>
            <!--
            <li class="nav-item <?php if(Request::segment(1)=='promo') echo 'active'; ?>">
                <a class="nav-link white-text m-r-2 p-b-0 w-100" href="{{route('promo')}}"><strong>PROMO</strong></a>
            </li>
            -->
            <li class="nav-item dropdown <?php if(Request::segment(1)=='promo') echo 'active'; ?>">
              <a class="nav-link dropdown-toggle white-text m-r-2 p-b-0 w-100" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><strong>PROMO</strong></a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{route('promo')}}">All Promo</a>
                <div class="dropdown-divider"></div>
                @foreach($page_datas->tags as $key => $data)
              <a class="dropdown-item" href="{{route('promo.category', ['category' => $data['tags']])}}">{{ $data['tags'] }}</a>
            @endforeach
              </div>
            </li>
            @if(is_null(Session::get('user')))
            <li class="nav-item <?php if(Request::segment(1)=='login') echo 'active'; ?>">
                <a class="nav-link white-text m-r-2 p-b-0 w-100" href="{{route('login')}}"><strong>SIGN UP / SIGN IN</strong></a>
            </li>
            @endif
            <li class="nav-item <?php if(Request::segment(1)=='aboutUs') echo 'active'; ?>">
                <a class="nav-link white-text m-r-2 p-b-0 w-100" href="{{route('aboutUs')}}"><strong>ABOUT US</strong></a>
            </li>
            @if(Session::has('user'))
            <li class="nav-item">
              <a class="nav-link white-text m-r-2 p-b-0 w-100" href="{{route('account')}}"><strong><i class="fa fa-user"></i></strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link white-text m-r-2 p-b-0 w-100" href="{{route('logout')}}" data-toggle="modal" data-target="#modalLogout"><strong><i class="fa fa-sign-out"></i>Logout</strong></a>
            </li>
            @endif
        </ul>
    </div>
    </div>
</nav>

<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
      <div class="modal-dialog" role="document">
            <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel2">Menu</h4>
                  </div>
                  <div class="modal-body">
                      <a href="{{route('home')}}"><div class="modal-menu menu-active2">HOME</div></a>
                      <a href="{{route('promo')}}"><div class="modal-menu">PROMO</div></a>
                      @if(is_null(Session::get('user')))
                      <a href="{{route('login')}}"><div class="modal-menu">SIGN UP / SIGN IN</div></a>
                      @endif
                      <a href="{{route('aboutUs')}}"><div class="modal-menu">CONTACT US</div></a>
                      @if(Session::has('username'))
                      <a href="{{route('logout')}}"><div class="modal-menu">LOGOUT</div></a>
                      @endif
                  </div>
              </div><!-- modal-content -->
      </div><!-- modal-dialog -->
</div><!-- modal -->
