        @extends('web.template')
        @section('content')
        <!-- content -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 p-y-2">
                    <center>{!! Html::image('images/adapromologo.png', null, ['class' => 'img-fluid'] ) !!}</center>
                </div>
            </div>
        </div>
        
        <div class="container-fluid m-b-3">
            <div class="row">        
                <div class="col-md-1 col-lg-1">&nbsp;</div>
                <div class="col-md-10 col-lg-10">
                    <div class="col-md-6 col-lg-6 p-x-3">
                        <h6>Jika sudah mempunyai akun silahkan login di bawah ini</h6><br>
                        <div class="card p-a-2">
                            <center><h5><b>LOGIN USER</b></h5></center>
                                {!! Form::open() !!}
                                        <label>Email:</label>
                                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                                        <label>Password:</label>
                                        {!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                                        <a href="#">Lupa Password</a><br><br>
                                        {!! Form::submit('LOGIN', ['class' => 'btn btn-block red white-text']) !!}
                                {!! Form::close() !!}
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 border-left-card p-x-3">
                        <h6>Jika sudah mempunyai akun silahkan login di bawah ini</h6><br>
                        <div class="card p-a-2">
                            <center><h5><b>DAFTAR USER BARU</b></h5></center>
                                {!! Form::open() !!}
                                    <label>Nama Lengkap:</label>
                                    {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap']) !!}
                                    <label>Email:</label>
                                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                                    <label>Password:</label>
                                    {!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                                    <label>Email:</label>
                                    {!! Form::text('konfirmasi-password', null, ['class' => 'form-control', 'placeholder' => 'Konfirmasi Password']) !!}
                                    <label>Tanggal Lahir:</label>
                                    {!! Form::text('tanggal-lahir', null, ['class' => 'form-control', 'placeholder' => 'Tanggal Lahir']) !!}
                                    <label>Jenis Kelamin:</label>
                                    {!! Form::radio('JK', null, ['class' => 'form-control']) !!} Pria
                                    {!! Form::radio('JK', null, ['class' => 'form-control']) !!} Wanita<br>
                                    <small>
                                    {!! Form::checkbox('syarat', null, ['class' => 'form-control']) !!}
                                    Dengan ini saya menyetujui <a href="#">Syarat dan Ketentuan</a> adapromo untuk mendaftar akun<br><br>
                                    </small>
                                    {!! Form::submit('Daftar Baru', ['class' => 'btn btn-block red white-text']) !!}
                                {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div class="col-sm-1 col-lg-1">&nbsp;</div>
            </div>
        </div>
        <!-- container -->
        <!-- end content -->
        @stop
        @section('simple-footer')
            @include('web.component.simple_footer')
        @stop