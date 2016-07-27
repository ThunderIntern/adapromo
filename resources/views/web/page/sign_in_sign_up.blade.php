        @extends('web.template')
        @section('content')
        <!-- content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" style="padding-top: 20px;">
                    <center>
                    <div class="col-md-12 lurus">
                        <img src="adapromologo.png">
                            <b></center>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row">        
                <div class="col-sm-1">&nbsp;</div>
                <div class="col-md-10">
                    <div class="col-md-6" style="padding: 0 70px;">
                        <h6>Jika sudah mempunyai akun silahkan login di bawah ini</h6><br>
                        <div id="content-detail" class="min-height-200">
                            <br>
                            <center><h5><b>LOGIN USER</b></h5></center><br>
                            <div class="detail">
                                <form>
                                    <h6>Email</h6>
                                    <input type="text">
                                    <h6>Password</h6>
                                    <input type="text">
                                    <a href="#">Lupa Password?</a><br><br>
                                </form>
                                 <a href=""><div class="more">LOGIN</div></a>
                            </div>
                           
                           
                        
                        </div>
                    </div>

                    <div class="col-md-6 border-left " style="padding: 0 70px;">
                        <h6>Jika sudah mempunyai akun silahkan login di bawah ini</h6><br>
                        <div id="content-detail">
                            <br>
                            <center><h5><b>DAFTAR USER BARU</b></h5></center><br>
                            <div class="detail">
                                <form>
                                    <h6>Nama Lengkap</h6>
                                    <input type="text">
                                    <h6>Email</h6>
                                    <input type="text">
                                    <h6>Password</h6>
                                    <input type="text">
                                    <h6>Konfirmasi Password</h6>
                                    <input type="text">
                                    <h6>Tanggal Lahir</h6>
                                    <input type="text">
                                    <h6>Jenis Kelamin<br>
                                    <input type="radio" name="JK">Pria <input type="radio" name="JK">Wanita<br>
                                    <input type="checkbox" name="syarat"> Dengan ini saya menyetujui <a href="#" class="link-a">Syarat dan Ketentuan</a> adapromo untuk mendaftar akun<br><br></h6>
                                </form>
                                <a href=""><div class="more">Daftar Baru</div></a>
                            </div>
                           
                            
                        </div>
                    </div>

                    
                </div>
                <div class="col-sm-1">&nbsp;</div>
                <div class="col-sm-12">&nbsp;</div>
            </div>
        </div>
        <!-- container -->
        <!-- end content -->
        @stop
        @section('simple-footer')
            @include('web.component.simple_footer')
        @stop