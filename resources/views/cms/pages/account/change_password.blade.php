@extends('cms.pages.account.template')
@section('page_content')
	<div class="card">
		<h3 class="p-x-2 p-t-2">Change Password</h3><hr class="m-x-2">
		@include('cms.widgets.alertbox')
			{!! Form::open(['url' => route('cms.password.save'), 'method' => 'post', 'class' => "p-x-2 p-b-2 p-t-1"]) !!}
				<label>Password Lama:</label>
				{!! Form::password('old', ['class' => 'form-control', 'placeholder' => 'Password Lama', 'required' => 'required']) !!}
				<label>Password Baru:</label>
				{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password Baru', 'required' => 'required']) !!}
				<label>Konfirmasi Password Baru:</label>
				{!! Form::password('konf_password', ['class' => 'form-control', 'placeholder' => 'Konfirmasi Password Baru', 'required' => 'required']) !!}
				{!! Form::submit('Save', ['class' => 'btn btn-block btn-primary white-text m-t-1']) !!}
	        {!! Form::close() !!}
    </div>
@stop