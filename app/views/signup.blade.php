@extends('master')

@section('content')
	{{ Form::open(array('action' => 'HomeController@userSignup')) }}
		<h1>Sign Up</h1>

		<!-- if there are login errors, show them here -->
		<p>
			{{ $errors->first('username') }}
			{{ $errors->first('password') }}
		</p>

		<p>
			{{ Form::label('username', 'Username') }}
			{{ Form::text('username', Input::old('username')) }}
		</p>

		<p>
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}
		</p>
		<p>
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password2') }}
		</p>

		<p>{{ Form::submit('Submit!') }} | <a href="/login">Already A User?</a></p>
	{{ Form::close() }}
@stop