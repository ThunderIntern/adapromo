<!-- menu -->
<nav class="navbar navbar-light red" style="line-height: 50px;">
    <div class="container">
        <a class="navbar-brand" href="#">
            {!! Html::image('images/adapromologo.png', null, ['class' => 'img-fluid'] ) !!}
        </a>
    <button class="navbar-toggler hidden-sm-up white-text" type="button" data-toggle="modal" data-target="#myModal2">
      &#9776;
    </button>
    <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
        <ul class="nav navbar-nav pull-xs-right">
            <li class="nav-item active">
                <a class="nav-link white-text m-r-2 p-b-0" href="#"><strong>HOME</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link white-text m-r-2 p-b-0" href="#"><strong>PROMO</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link white-text m-r-2 p-b-0" href="#"><strong>SIGN UP / SIGN IN</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link white-text" href="#"><strong>CONTACT US</strong></a>
            </li>
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
                      <a href=""><div class="modal-menu menu-active2">HOME</div></a>
                      <a href=""><div class="modal-menu">PROMO</div></a>
                      <a href=""><div class="modal-menu">SIGN UP / SIGN IN</div></a>
                      <a href=""><div class="modal-menu">CONTACT US</div></a>
                  </div>
              </div><!-- modal-content -->
      </div><!-- modal-dialog -->
</div><!-- modal -->
