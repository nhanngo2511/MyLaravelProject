@extends('layouts.layout',  ['title' => 'Create Post'])


@section('content')

<h1>Create Post</h1>

{{-- <form action="../posts" method="POST">
	{{csrf_field()}}
	<input type="text" name="title" placeholder="Enter title">
	<input type="submit" value="submit">
</form> --}}

{!! Form::open(['method' => 'POST', 'action' => 'PostsController@store', 'class' => 'form-horizontal','files'=>true]) !!}
	<div class="form-group{{ $errors->has('title') ? ' has-error' : ' hasnot-error' }}">
	    {!! Form::label('lb-post-name', 'Post name:') !!}
	    {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    <small class="text-danger">{{ $errors->first('title') }}</small>
	</div>

	<div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
	    {!! Form::label('file', 'File label', ['class' => 'col-sm-3 control-label']) !!}
	    <div class="col-sm-9">
		    {!! Form::file('file', ['required' => 'required']) !!}
		    <p class="help-block">Help block text</p>
		    <small class="text-danger">{{ $errors->first('file') }}</small>
	    </div>
	</div>

	<hr>
    <div class="btn-group pull-right">
        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
        {!! Form::submit("Create Post", ['class' => 'btn btn-success']) !!}
    </div>

{!! Form::close() !!}

@endsection

