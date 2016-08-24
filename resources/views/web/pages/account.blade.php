        @extends('web.template')
        @section('navbar-red')
            @include('web.component.navbar-red')
        @stop
        @section('content')
        <!-- content -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12  m-b-3">
                    <div class="col-md-12 col-lg-12">
                        <div class="card m-t-3 p-a-2">
                            <div id="notif"></div>
                            @if(Session::has('message-danger'))
                                <center><div class="alert alert-danger"><small>{{Session::get('message-danger')}}</small></div></center>
                            @endif
                            @if(Session::has('message-success'))
                                <center><div class="alert alert-success"><small>{{Session::get('message-success')}}</small></div></center>
                            @endif

                            <ul class="nav nav-tabs" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#account" role="tab">Account Setting</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#changepassword" role="tab">Change Password</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#favorites" role="tab">Favorite Promo</a>
                              </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                              <div class="tab-pane active p-b-2" id="account" role="tabpanel">
                                <h3 class="text-xs-left m-t-2 dark-blue-text">Account Setting</h3>
                                  {!! Form::open(['url' => route('account_setting'), 'method' => 'post', 'class' => 'text-xs-left', 'onsubmit' => 'return validate();']) !!}
                                    {!! Form::hidden('id', $page_attributes->detail['_id']) !!}
                                    <label>Email:</label>
                                    {!! Form::text('email', $page_attributes->detail['email'], ['class' => 'form-control', 'placeholder' => 'Email', 'required' => 'required', 'readonly' => 'yes']) !!}
                                    <label>Nama:</label>
                                    {!! Form::text('name', $page_attributes->detail['name'], ['class' => 'form-control', 'placeholder' => 'Name', 'required' => 'required']) !!}
                                    <label>Tanggal Lahir:</label>
                                    {!! Form::text('dob', $page_attributes->detail['dob'], ['class' => 'form-control icon-awesome-placeholder', 'placeholder' => 'Date of Birth', 'data-inputmask' => "'mask':'m/d/y'", 'required' => 'required', 'id' => 'dob']) !!}
                                    {!! Form::submit('Save', ['class' => 'btn btn-block dark-blue white-text m-t-1']) !!}
                                  {!! Form::close() !!}
                              </div>
                              <div class="tab-pane" id="changepassword" role="tabpanel">
                                <h3 class="text-xs-left m-t-2 dark-blue-text">Change Password</h3>
                                  {!! Form::open(['url' => route('change_password'), 'method' => 'post', 'class' => 'text-xs-left', 'onsubmit' => "return validate_password();"]) !!}
                                    {!! Form::hidden('id', $page_attributes->detail['_id']) !!}
                                    <label>Password Lama:</label>
                                    {!! Form::password('old', ['class' => 'form-control', 'placeholder' => 'Password Lama', 'required' => 'required']) !!}
                                    <label>Password Baru:</label>
                                    {!! Form::password('new', ['class' => 'form-control', 'placeholder' => 'Password Baru', 'required' => 'required', 'id' => 'password']) !!}
                                    <label>Konfirmasi Password Baru:</label>
                                    {!! Form::password('konf_new', ['class' => 'form-control', 'placeholder' => 'Konfirmasi Password Baru', 'required' => 'required', 'id' => 'konf_password']) !!}
                                    {!! Form::submit('Ubah Password', ['class' => 'btn btn-block dark-blue white-text m-t-1 m-b-2'
                                    ]) !!}
                                  {!! Form::close() !!}
                               </div>

                               <div class="tab-pane" id="favorites" role="tabpanel">
                                    <div class="text-xs-left p-a-2">
                                    @foreach($page_attributes->favorites as $favorite)
                                        <i class="fa fa-heart red-text"></i> &nbsp;<a href="{{route('promo.detail', ['id' => $favorite['id']])}}">{{ $favorite['title']}}</a><br>
                                    @endforeach
                                    </div>
                               </div>
                            </div>

                        </div>
                    </div>
                </div>        
            </div>
        </div>
        <!-- end content -->
        @stop
        @section('simple-footer')
            @include('web.component.footer')
        @stop
        @section('js')
            <script>
                function validate_password(){
                    if(!(document.getElementById('password').value==document.getElementById('konf_password').value)){
                        document.getElementById('notif').innerHTML = '<small>Konfirmasi password tidak sesuai.</small>';
                        document.getElementById('notif').setAttribute('class', 'alert alert-danger');
                        return false;
                    }
                    else{
                        document.getElementById('notif').innerHTML = '';
                        document.getElementById('notif').setAttribute('class', '');
                        return true;
                    }
                }
                function validate(){
                    if((document.getElementById('dob').value).search('_')<0){
                        document.getElementById('notif').innerHTML = '';
                        document.getElementById('notif').setAttribute('class', '');
                        return true;
                    }
                    else{
                        document.getElementById('notif').innerHTML = '<small>Inputan <b>Tanggal Lahir</b> tidak sesuai.</small>';
                        document.getElementById('notif').setAttribute('class', 'alert alert-danger');
                        return false;
                    }
                }
            </script>
        @stop