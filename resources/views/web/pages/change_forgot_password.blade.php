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
            <div class="col-md-6 offset-md-3">
                <div class="card p-a-2">
                    <center><h5><b>Pemulihan Password</b></h5></center>
                        <div id="notif"></div>
                        {!! Form::open(['url' => route('change_forgot_password'), 'method' => 'post']) !!}
                        @if(Session::has('message-danger'))
                            <center><div class="alert alert-danger"><small>{{Session::get('message-danger')}}</small></div></center>
                        @endif
                        @if(Session::has('message-success'))
                            <center><div class="alert alert-success"><small>{{Session::get('message-success')}}</small></div></center>
                        @endif
                                {!! Form::hidden('id', $page_attributes->datas['_id']) !!}
                                <label>Email:</label>
                                {!! Form::text('email', $page_attributes->datas['email'], ['class' => 'form-control m-b-1', 'placeholder' => 'Email', 'required' => 'required', 'disabled' => 'disabled']) !!}
                                <label>Password Baru:</label>
                                {!! Form::password('password', ['class' => 'form-control m-b-1', 'placeholder' => 'Password Baru', 'required' => 'required']) !!}
                                <label>Email:</label>
                                {!! Form::password('konf_password', ['class' => 'form-control m-b-1', 'placeholder' => 'Konfirmasi Password Baru', 'required' => 'required']) !!}
                                {!! Form::submit('Ubah Password', ['class' => 'btn btn-block red white-text', 'onClick' => "if(!(this.form.password.value==this.form.konf_password.value)){
                                    document.getElementById('notif').innerHTML = '<small>Konfirmasi password tidak sesuai.</small>';
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
        <!-- container -->
        <!-- end content -->
        @stop
        @section('simple-footer')
            @include('web.component.simple_footer')
        @stop