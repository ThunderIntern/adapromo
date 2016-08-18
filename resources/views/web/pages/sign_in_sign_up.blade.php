@if(!is_null(Session::get('user')))
    <script>
        window.location.href = '{{route("home")}}'; 
    </script>
@endif
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
        
        <div class="container m-b-3">
            <div class="row">        
                <div class="col-md-12 col-lg-12">
                    <div class="col-md-6 col-lg-6 p-x-3">
                        <h6>Jika sudah mempunyai akun silahkan login di bawah ini</h6><br>
                        <div class="card p-a-2">
                            <center><h5><b>LOGIN USER</b></h5></center>
                                {!! Form::open(['url' => route('login.procces'), 'method' => 'post']) !!}
                                @if(Session::has('message-danger'))
                                    <center><div class="alert alert-danger">{{Session::get('message-danger')}}</div></center>
                                @endif
                                @if(Session::has('message-success'))
                                    <center><div class="alert alert-success">{{Session::get('message-success')}}</div></center>
                                @endif
                                        <label>Email:</label>
                                        {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Email', 'required' => 'required']) !!}
                                        <label>Password:</label>
                                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required']) !!}
                                        <a href="#">Lupa Password</a><br><br>
                                        {!! Form::submit('LOGIN', ['class' => 'btn btn-block red white-text']) !!}
                                {!! Form::close() !!}
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 border-left-card p-x-3">
                        <h6>Jika sudah mempunyai akun silahkan login di bawah ini</h6><br>
                        <div class="card p-a-2">
                            <center><h5><b>DAFTAR USER BARU</b></h5></center>
                                {!! Form::open(['url' => route('register'), 'method' => 'post']) !!}
                                    <label>Nama Lengkap:</label>
                                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap', 'required' => 'required']) !!}
                                    <label>Email:</label>
                                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'required' => 'required']) !!}
                                    <label>Password:</label>
                                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required']) !!}
                                    <label>Tanggal Lahir:</label>
                                    {!! Form::date('dob', null, ['class' => 'form-control', 'placeholder' => 'Tanggal Lahir (Format: mm/dd/yyyy)', 'required' => 'required']) !!}
                                    <small>
                                    <input type="checkbox" name="syarat" id="syarat" value="syarat" required="required">
                                    Dengan ini saya menyetujui <a href="#">Syarat dan Ketentuan</a> adapromo untuk mendaftar akun<br><br>
                                    </small>
                                    <div class="red-text" id="validate"></div>
                                    {!! Form::submit('Daftar Baru', ['class' => 'btn btn-block red white-text', 'onclick' => "if(!this.form.checkbox.checked){return false;}"]) !!}
                                {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container -->
        <!-- end content -->
        @stop
        @section('simple-footer')
            @include('web.component.simple_footer')
        @stop