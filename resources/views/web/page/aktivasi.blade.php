        @extends('web.template')
        @section('navbar-red')
            @include('web.component.navbar-red')
        @stop
        @section('content')
        <!-- content -->
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="col-md-3 col-lg-3"></div>
                    <div class="col-md-6 col-lg-6">
                        <div class="card m-t-3 p-a-2">
                            <center>
                                <h4><b>Anda berhasil aktivasi akun</b></h4>
                                <h6>Terima kasih, pendaftaran anda telah berhasil dan bergabung dengan adapromo.id.<br><br>
                                Untuk melihat promo-promo yang berlangsung lihat <a href="">disini</a></h6>
                                <div style="clear:both;"></div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3"></div>
                </div>        
            </div>
        </div>
        <!-- end content -->
        @stop
        @section('simple-footer')
            @include('web.component.simple_footer')
        @stop