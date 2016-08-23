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
                    <center><h5><b>Forgot Password</b></h5></center>
                        {!! Form::open(['url' => route('forgot_password'), 'method' => 'post']) !!}
                        @if(Session::has('message-danger'))
                            <center><div class="alert alert-danger"><small>{{Session::get('message-danger')}}</small></div></center>
                        @endif
                        @if(Session::has('message-success'))
                            <center><div class="alert alert-success"><small>{{Session::get('message-success')}}</small></div></center>
                        @endif
                                <center><label>Email:</label></center>
                                {!! Form::text('email', null, ['class' => 'form-control m-b-1', 'placeholder' => 'Email', 'required' => 'required']) !!}
                                {!! Form::submit('Send Email Confirmation', ['class' => 'btn btn-block red white-text']) !!}
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