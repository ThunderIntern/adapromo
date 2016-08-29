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
                    <center><a href="{{ route('home') }}"> {!! Html::image('images/adapromologo.png', null, ['class' => 'img-fluid'] ) !!}</a></center>
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
                                    <center><div class="alert alert-danger"><small>{{Session::get('message-danger')}}</small></div></center>
                                @endif
                                @if(Session::has('message-success'))
                                    <center><div class="alert alert-success"><small>{{Session::get('message-success')}}</small></div></center>
                                @endif
                                        <label>Email:</label>
                                        {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Email', 'required' => 'required']) !!}
                                        <label>Password:</label>
                                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required']) !!}
                                        <a href="{{route('forgot_password')}}">Lupa Password</a><br><br>
                                        {!! Form::submit('LOGIN', ['class' => 'btn btn-block red white-text']) !!}
                                {!! Form::close() !!}
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 border-left-card p-x-3">
                        <h6>Silahkan Registrasi jika belum memiliki akun</h6><br>
                        <div class="card p-a-2">
                            <center><h5><b>DAFTAR USER BARU</b></h5></center>
                                <div id="notif">
                                    @if(Session::has('message-register'))
                                        <center><div class="alert alert-danger"><small>{{Session::get('message-register')}}</small></div></center>
                                    @endif
                                </div>
                                {!! Form::open(['url' => route('register'), 'method' => 'post']) !!}
                                    <label>Nama Lengkap:</label>
                                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap', 'required' => 'required']) !!}
                                    <label>Email:</label>
                                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'required' => 'required']) !!}
                                    <label>Password:</label>
                                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required']) !!}
                                    <label>Password:</label>
                                    {!! Form::password('konf_password', ['class' => 'form-control', 'placeholder' => 'Konfirmasi Password', 'required' => 'required']) !!}
                                    <label>Tanggal Lahir:</label>
                                    {!! Form::text('dob', null, ['class' => 'form-control', 'placeholder' => 'Tanggal Lahir (Format: mm/dd/yyyy)', 'required' => 'required', 'data-inputmask' => "'mask':'m/d/y'"]) !!}
                                    <small>
                                    {!! Form::checkbox('syarat', 'syarat', ['class' => 'form-control']) !!}
                                    Dengan ini saya menyetujui <a href="#">Syarat dan Ketentuan</a> adapromo untuk mendaftar akun<br><br>
                                    </small>
                                    {!! Form::submit('Daftar Baru', ['class' => 'btn btn-block red white-text', 'onClick' => "if(!(this.form.password.value==this.form.konf_password.value)){
                                            document.getElementById('notif').innerHTML = '<small><b>Konfirmasi password</b> tidak sesuai.</small>';
                                            document.getElementById('notif').setAttribute('class', 'alert alert-danger');
                                            return false;
                                        }
                                        else if((this.form.dob.value).search('_')>=0){
                                            document.getElementById('notif').innerHTML = '<small>Inputan <b>Tanggal Lahir</b> tidak sesuai.</small>';
                                            document.getElementById('notif').setAttribute('class', 'alert alert-danger');
                                            return false;
                                        }
                                        else if(!this.form.syarat.checked){
                                            document.getElementById('notif').innerHTML = '<small>Anda harus menyetujui <b>syarat dan ketentuan</b>.</small>';
                                            document.getElementById('notif').setAttribute('class', 'alert alert-danger');
                                            return false;
                                        }
                                        else{
                                            document.getElementById('notif').innerHTML = '';
                                            document.getElementById('notif').setAttribute('class', '');
                                            return true;
                                        }"
                                    ]) !!}
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