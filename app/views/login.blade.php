@extends('master')

@section('content')
{{ Notification::showAll() }}
	{{ Form::open(array('url' => 'login')) }}
		<h1>Login</h1>

		<!-- if there are login errors, show them here -->
		<p>
			{{ $errors->first('username') }}
			{{ $errors->first('password') }}
		</p>

		<p>
			{{ Form::label('username', 'Username') }}
			{{ Form::text('username') }}
		</p>

		<p>
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}
		</p>

		<p>{{ Form::submit('Submit!') }} or <a href="/signup">Sign Up</a></p>
	{{ Form::close() }}
@stop
