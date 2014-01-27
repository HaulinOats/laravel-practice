@extends('master')

@section('content')
	<h1>Hello {{ $user->username }}</h1>

	<h2>Uploaded Images<h2>
	@foreach($images as $image)
	<div class="img-container">
		<a href="{{ route('imageDelete', $image->id) }}"><img src="/assets/images/close-icon.png" alt="close" class="close-icon"/></a>
		<img src="..{{ $image->url }}" alt="{{ $image->url }}" style="margin:1%;width:98%"/>
	</div>
	@endforeach
	<h2>Upload Form</h2>
	{{ Form::open(array('url' => 'image/upload', 'files'=> true)) }}
	{{ Form::file('image', array('class' => 'img-upload')) }}
	{{ Form::hidden('user_id', $user->id) }}
	{{ Form::submit('Submit!') }}
	{{ Form::close() }}
@stop