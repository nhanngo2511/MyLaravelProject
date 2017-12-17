@extends('layouts.layout',  ['title' => 'Edit Post'])


@section('content')

<h1>Edit Post</h1>
{{-- 
<form action="../{{ $post->id }}" method="POST">
	{{csrf_field()}}

	<input type="hidden" name="_method" value="PUT">

	<input type="text" name="title" placeholder="Enter title" value="{{ $post->title }}">
	<input type="submit" value="submit">

</form>
--}}
{!! Form::model($post, ['method' => 'POST', 'action' => ['PostsController@update', $post->id], 'class' => 'form-horizontal']) !!}

<div class="form-group{{ $errors->has('title') ? ' has-error' : 'ERROR' }}">
	{!! Form::label('title', 'Input', ['class' => 'col-sm-3 control-label']) !!}
	<div class="col-sm-9">
		{!! Form::text('title', $post->title, ['class' => 'form-control', 'required' => 'required']) !!}
		<small class="text-danger">{{ $errors->first('title') }}</small>
	</div>
</div>
<hr>
<div class="btn-group pull-right">
	{!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
	{!! Form::submit("Edit", ['class' => 'btn btn-success']) !!}
</div>

{!! Form::close() !!}


@endsection

