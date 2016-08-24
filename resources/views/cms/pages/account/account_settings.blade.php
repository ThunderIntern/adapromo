@extends('cms.pages.account.template')
@section('page_content')
	<div class="card">
		<h3 class="p-x-2 p-t-2">Account Settings</h3><hr class="m-x-2">
		@include('cms.widgets.alertbox')
		@foreach($page_datas->account as $key => $account)
			{!! Form::open(['url' => route('cms.account.save'), 'method' => 'post', 'class' => "p-x-2 p-b-2 p-t-1"]) !!}
			<label>Email:</label>
			{!! Form::email('email', $account['email'], ['class' => 'form-control', 'placeholder' => 'Email', 'required' => 'required']) !!}
			<label>Name:</label>
			{!! Form::text('name', $account['name'], ['class' => 'form-control', 'placeholder' => 'Name', 'required' => 'required']) !!}
			<label>Date of Birth:</label>
			{!! Form::date('dob', $account['dob'], ['class' => 'form-control', 'placeholder' => 'Date of Birth', 'required' => 'required']) !!}
			<fieldset class="form-group">
				<label for="name">Role</label>
				{{ Form::select('role', ['admin' => 'Admin', 'editor' => 'Editor', 'user' => 'User'], $account['role'], ['class' => 'form-control c-select']) }}
			</fieldset>
			{!! Form::submit('Save', ['class' => 'btn btn-block btn-primary white-text']) !!}
	        {!! Form::close() !!}
        @endforeach
    </div>
@stop