<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        {!! Html::script(elixir('js/app.js')) !!}
        {!! Html::style(elixir('css/app.css')) !!}
        <link rel="stylesheet" href="<?php echo asset('http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'); ?>" />
    </head>
    <body>
        <!-- menu -->
        <div class="container-fluid">
    		<div class="row">
    			<div class="col-md-1">
    			</div>
    			<div class="col-md-10 jarak-banner" style="background: url('pano.jpg'); background-size: cover;">
    				<div class="col-md-12 lurus">
    					<img src="adapromologo.png">
    						<b>
    						<nav class="navbar navbar-light" style="float:right">
    						  <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
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
                    <div style="clear: both;"></div>
    			</div>
    		</div>
        </div>
        <!-- end menu -->
        
        <!-- search -->
        <div class="container-fluid">
            <div class="row">
                    <div class="search-menu">
                        <div class="col-sm-1">&nbsp;</div>
                        <div class="col-sm-10">
                            <form method="POST" action="">
                                <div class="hideMob">
                                <div class="col-md-3"><input type="text" name="nama" placeholder="Ketik Nama Promo"/></div>
                                <div class="col-md-2"><input type="text" name="lokasi" placeholder="Lokasi"/></div>
                                <div class="col-md-2"><input type="text" name="kategori" placeholder="Kategori"/></div>
                                <div class="col-md-2"><input type="text" name="tanggal" placeholder="Tanggal Promo"/></div>
                                <div class="col-md-3"><button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Cari</button></div>
                                </div>
                                <div class="hideDesk">
                                <div class="col-md-12">
                                    <input type="text" name="nama" placeholder="Ketik Nama Promo"/>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Cari</button>
                                </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-1">&nbsp;</div>
                        <div style="clear: both;"></div>
                    </div>
            </div>
        </div>
        <!-- end search -->
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" style="padding-top: 20px;">
                    <center><h4><b>PROMO HARI INI</b></h4></center>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row">        
                <div class="col-sm-1">&nbsp;</div>
                <div class="col-md-10">
                    <div class="col-md-4" style="padding: 0 17px;">
                        <div id="box">
                            <img src="promo3.jpg" />
                            <div class="detail">
                                <a href="">Promo Daster Slim Matahari Mall 50%</a><br />
                                <i class="fa fa-heart"></i> <info>Favorites</info> <status>Iklan Aktif</status>
                            </div>
                            <hr />
                            <div class="date"><i class="fa fa-calendar"></i> <info>18-06-2016 s/d 20-07-2016</info></div>
                            <hr />
                            <div class="detail">
                            Welcome To The Online Best Model Winner Contest At Look Of the Year.
                            <br /><br /><i class="fa fa-tag"></i> Fashion<br /><br />
                            <a href=""><div class="button">Lihat Promo</div></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding: 0 17px;">
                        <div id="box">
                            <img src="promo3.jpg" />
                            <div class="detail">
                                <a href="">Promo Daster Slim Matahari Mall 50%</a><br />
                                <i class="fa fa-heart"></i> <info>Favorites</info> <status>Iklan Aktif</status>
                            </div>
                            <hr />
                            <div class="date"><i class="fa fa-calendar"></i> <info>18-06-2016 s/d 20-07-2016</info></div>
                            <hr />
                            <div class="detail">
                            Welcome To The Online Best Model Winner Contest At Look Of the Year.
                            <br /><br /><i class="fa fa-tag"></i> Fashion<br /><br />
                            <a href=""><div class="button">Lihat Promo</div></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding: 0 17px;">
                        <div id="box">
                            <img src="promo3.jpg" />
                            <div class="detail">
                                <a href="">Promo Daster Slim Matahari Mall 50%</a><br />
                                <i class="fa fa-heart"></i> <info>Favorites</info> <status>Iklan Aktif</status>
                            </div>
                            <hr />
                            <div class="date"><i class="fa fa-calendar"></i> <info>18-06-2016 s/d 20-07-2016</info></div>
                            <hr />
                            <div class="detail">
                            Welcome To The Online Best Model Winner Contest At Look Of the Year.
                            <br /><br /><i class="fa fa-tag"></i> Fashion<br /><br />
                            <a href=""><div class="button">Lihat Promo</div></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1">&nbsp;</div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row">        
                <div class="col-sm-1">&nbsp;</div>
                <div class="col-md-10">
                    <div class="col-md-4" style="padding: 0 17px;">
                        <div id="box">
                            <img src="promo3.jpg" />
                            <div class="detail">
                                <a href="">Promo Daster Slim Matahari Mall 50%</a><br />
                                <i class="fa fa-heart"></i> <info>Favorites</info> <status>Iklan Aktif</status>
                            </div>
                            <hr />
                            <div class="date"><i class="fa fa-calendar"></i> <info>18-06-2016 s/d 20-07-2016</info></div>
                            <hr />
                            <div class="detail">
                            Welcome To The Online Best Model Winner Contest At Look Of the Year.
                            <br /><br /><i class="fa fa-tag"></i> Fashion<br /><br />
                            <a href=""><div class="button">Lihat Promo</div></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding: 0 17px;">
                        <div id="box">
                            <img src="promo3.jpg" />
                            <div class="detail">
                                <a href="">Promo Daster Slim Matahari Mall 50%</a><br />
                                <i class="fa fa-heart"></i> <info>Favorites</info> <status>Iklan Aktif</status>
                            </div>
                            <hr />
                            <div class="date"><i class="fa fa-calendar"></i> <info>18-06-2016 s/d 20-07-2016</info></div>
                            <hr />
                            <div class="detail">
                            Welcome To The Online Best Model Winner Contest At Look Of the Year.
                            <br /><br /><i class="fa fa-tag"></i> Fashion<br /><br />
                            <a href=""><div class="button">Lihat Promo</div></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding: 0 17px;">
                        <div id="box">
                            <img src="promo3.jpg" />
                            <div class="detail">
                                <a href="">Promo Daster Slim Matahari Mall 50%</a><br />
                                <i class="fa fa-heart"></i> <info>Favorites</info> <status>Iklan Aktif</status>
                            </div>
                            <hr />
                            <div class="date"><i class="fa fa-calendar"></i> <info>18-06-2016 s/d 20-07-2016</info></div>
                            <hr />
                            <div class="detail">
                            Welcome To The Online Best Model Winner Contest At Look Of the Year.
                            <br /><br /><i class="fa fa-tag"></i> Fashion<br /><br />
                            <a href=""><div class="button">Lihat Promo</div></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="padding-bottom: 20px;">
                        <center><a href="" class="button-all">Semua Promo</a></center>    
                    </div>       
                </div>
                <div class="col-sm-1">&nbsp;</div>
            </div>
        </div>
        <!-- end content -->
        
        <!-- footer -->
        <div class="container-fluid">
    		<div class="row">
    			<div class="desktop">
    				<footer class="background-footer">
    							<div class="col-md-1"></div>
    							<div class="col-md-10" style="margin-top:20px">
    							<div class="col-md-2">
    								<img src="adapromologo.png" style="width:100%">
    							</div>
    							<div class="col-md-3">
    								<div class="footer-head-text"><b>
    									PT. ADA PROMO
    								</b></div>
    								<div class="footer-text">
    								THE CEO BUILDING , Lt 12<br>
    								Jln. TB Simatupang No. 18C<br>
    								Jakarta Selatan, 12430, Indonesia<br>
    								contact[at].adapromo.id<br>
    								<img src="facebook.png" width=20>&nbsp&nbsp&nbsp<img src="twitter.png" width=20>
    								</div>
    							</div>
    							<div class="col-md-3">
    								<div class="footer-head-text"><b>
    									Tentang AdaPromo.id
    								</b></div>
    								<div class="footer-text">
    								About Us<br>
    								Contact Us<br>
    								FAQ<br>
    								Syarat dan Ketentuan<br>
    								Daftarkan Promosi Anda<br>
    								</div>
    							</div>
    							<div class="col-md-4">
    								<div class="footer-head-text"><b>
    									Newsletter
    								</b></div>
    								<input type="text" class="footer-textbox" placeholder="alamat email anda">
    								<button type=button class="footer-button">subscribe</button>
    								<br><div class="footer-text">
    									Dapatkan informasi promo-promo terbaru dengan subscribe email anda
    								</div>
    							</div>
    							</div>
    							<div style="clear:both"></div>
    				</footer>
    			</div>
    			<footer class="mobile">
    				<hr>
    				<div class="putih">
    				<div class="footer-head-text"><br>
    					<center><b>NEWSLETTER</b></center><br>
    				</div>
    				<div class="footer-text">
    				<center>	
    				Dapatkan informasi promo-promo terbaru dengan subscribe email anda<br><br>
    				</center>
    				</div>
    				<form>
    					<input class="footer-textbox" placeholder="alamat email anda">
    					<button type="submit" class="footer-button" style="letter-spacing:4px">Subscribe</button><br><br>
    				</form>
    				</div>
    				<div class="background-footer">
    					<center><img src="adapromologo.png" style="width:40%"></center><br>
    					<div class="footer-head-text">
    						<b>
    							<center>PT. ADA PROMO</center>
    						</b>
    					</div>
    					<div class="footer-text">
    						<center>THE CEO BUILDING , Lt 12<br>
    						Jln. TB Simatupang No. 18C<br>
    						Jakarta Selatan, 12430, Indonesia<br>
    						contact[at].adapromo.id<br>
    						<img src="facebook.png" width=20>&nbsp&nbsp&nbsp
    						<img src="twitter.png" width=20></center>
    					</div>
    				</div>
    
    
    			</footer>
    
    			<footer class="background-footer-2">
    					<div class="col-md-1"></div>
    					<div class="col-md-10">
    						<div class="col-md-3 footer-text-2" style="color:white; padding-top:10px">
    							&copy; 2015 - 2016 adapromo.id
    						</div>
    					</div>
    					<div style="clear:both"></div>
    			</footer>
    		</div>
    	</div>
        <!-- end footer -->
    </body>
</html>
