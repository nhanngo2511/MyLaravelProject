@extends('layouts.layout', ['title' => 'Posts'])


@section('content')

<ul>

	@foreach ($posts as $post)
	<li>
		<a href="{{ route('posts.show', $post->id) }}" "email me">{{$post->title}}</a> || <a href="{{ route('posts.edit', $post->id) }}" "email me">Edit</a> || <a href="{{ route('posts.destroy', $post->id) }}">Delete</a> 
		<img style="width: 500px" src="images/{{ $post->path }}" alt="">
	</li>	
	@endforeach

</ul>






@endsection

