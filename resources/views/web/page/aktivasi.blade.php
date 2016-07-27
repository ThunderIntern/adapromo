        @extends('web.template')
        @section('navbar-red')
            @include('web.component.navbar-red')
        @stop
        @section('content')
        <!-- content -->
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <center>
                    <div class="simple-box margin-bottom-300">
                        <h4><b>Anda berhasil aktivasi akun</b></h4>
                        <h6>Terima kasih, pendaftaran anda telah berhasil dan bergabung dengan adapromo.id.<br><br>
                        Untuk melihat promo-promo yang berlangsung lihat <a href="">disini</a></h6>
                        <div style="clear:both;"></div>
                    </div>
                    </center>
                </div>        
            </div>
        </div>
        <!-- end content -->
        @stop
        @section('simple-footer')
            @include('web.component.simple_footer')
        @stop