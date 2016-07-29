menu -->
<nav class="navbar navbar-light bg-faded" style="line-height: 50px;">
	<div class="container">
		<a class="navbar-brand" href="#">
			{!! Html::image('images/adapromologo.png', null, ['class' => 'img-fluid'] ) !!}
		</a>
		<ul class="nav navbar-nav pull-xs-right">
			<li class="nav-item active">
				<a class="nav-link dark-text m-r-2 p-b-0" href="#"><strong>HOME</strong></a>
			</li>
			<li class="nav-item">
				<a class="nav-link dark-text m-r-2 p-b-0" href="#"><strong>PROMO</strong></a>
			</li>
			<li class="nav-item">
				<a class="nav-link dark-text m-r-2 p-b-0" href="#"><strong>SIGN UP / SIGN IN</strong></a>
			</li>
			<li class="nav-item">
				<a class="nav-link dark-text" href="#"><strong>CONTACT US</strong></a>
			</li>
		</ul>
	</div>
</nav>

        <!-- menu -->
        <!-- <div class="container-fluid">
    		<div class="row">
    			<div class="col-md-1">
    			</div>
    			<div class="col-md-10 jarak-banner" style="background: url('pano.jpg'); background-size: cover;">
    				<div class="col-md-12 lurus">
                            <img src="{{ url('adapromologo.png') }}"/>
                                <b>
                                <nav class="navbar navbar-light" style="float:right">
                                  <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="modal" data-target="#myModal2">
                                    &#9776;
                                  </button>
                                  <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
                                    <ul class="nav navbar-nav">
                                      <li class="nav-item menu-active menu-first">
                                        <a class="nav-link" href="#">HOME </a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="#">PROMO</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="#">SIGN UP / SIGN IN</a>
                                      </li>
                                      <li class="nav-item menu-last">
                                        <a class="nav-link" href="#">CONTACT US</a>
                                      </li>
                                    </ul>
                                  </div>
                                </nav>
                                </b>
                        </div>

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

                    <div style="clear: both;"></div>
    			</div>
    		</div>
        <!-- </div>
        end menu -->