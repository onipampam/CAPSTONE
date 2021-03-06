@extends('layouts.admin')

@section('page_title')

Users

@endsection

@section('content')

<h1>Edit Users</h1>


			{!! Form::model($user,['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files' => true]) !!}

			<div class = "form-group">
				{!! Form:: label('name', 'Name:') !!}
				{!! Form:: text('name',null, ['class'=>'form-control']) !!}
			</div>

			<div class = "form-group">
				{!! Form:: label('email', 'Email:') !!}
				{!! Form:: text('email',null, ['class'=>'form-control']) !!}

			</div>

			<div class = "form-group">
				{!! Form:: label('role_id', 'Role:') !!}
				{!! Form:: select('role_id', [''=>'Choose Options'] + $roles ,null, ['class'=>'form-control']) !!}

			</div>

			<div class = "form-group">
				{!! Form:: label('is_active', 'Status:') !!}
				{!! Form:: select('is_active', array(1=>'Active', 0=>'Not Active'), null, ['class'=>'form-control']) !!}

			</div>

			<div class = "form-group">
				{!! Form:: label('password', 'Password:') !!}
				{!! Form:: password('password', ['class'=>'form-control']) !!}

			</div>

			<div class = "form-group">
				{!! Form:: submit('Edit User', ['class'=>'btn btn-primary col-sm-6']) !!}
			</div>

		{!! Form::close() !!}

	
		@include('includes.form_error')

@stop