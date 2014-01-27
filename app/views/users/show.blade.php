@extends('master')

@section('content')
	<h1>Hello {{ $user->username }}</h1>

	<h2>Uploaded Images<h2>
	@foreach($images as $image)
		<img src="..{{ $image->url }}" alt="{{ $image->url }}" style="width:21%;margin:0% 2% 0% 2%;"/>
	@endforeach
	<h2>Upload Form</h2>
	{{ Form::open(array('url' => 'image/upload', 'files'=> true)) }}
	{{ Form::file('image', array('class' => 'img-upload')) }}
	{{ Form::hidden('user_id', $user->id) }}
	{{ Form::submit('Submit!') }}
	{{ Form::close() }}
@stop