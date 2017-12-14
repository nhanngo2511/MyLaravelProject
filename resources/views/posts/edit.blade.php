@extends('layouts.layout',  ['title' => 'Edit Post'])


@section('content')

<h1>Edit Post</h1>

<form action="../{{ $post->id }}" method="POST">
	{{csrf_field()}}

	{{-- <input type="hidden" name="_method" value="PUT"> --}}

	<input type="text" name="title" placeholder="Enter title" value="{{ $post->title }}">
	<input type="submit" value="submit">

</form>


@endsection

