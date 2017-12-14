@extends('layouts.layout',  ['title' => 'Create Post'])


@section('content')

<h1>Create Post</h1>

<form action="../posts" method="POST">
	{{csrf_field()}}
	<input type="text" name="title" placeholder="Enter title">
	<input type="submit" value="submit">
</form>


@endsection

