        @extends('web.template')
        @section('navbar-red')
            @include('web.component.navbar-red')
        @stop
        @section('content')
        <!-- content -->
        
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12  m-b-3">
                    <div class="col-md-2 col-lg-2"></div>
                    <div class="col-md-8 col-lg-8">
                        <div class="card m-t-3 p-a-2">
                            <center>
                                <h1><b>Anda berhasil registrasi, silahkan cek email anda untuk aktivasi email.</b></h1>
                                <div style="clear:both;"></div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2"></div>
                </div>        
            </div>
        </div>
        <!-- end content -->
        @stop
        @section('simple-footer')
            @include('web.component.footer')
        @stop