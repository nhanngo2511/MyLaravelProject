<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *

     */
    public function store(Request $request)
    {

       $input = $request->all();

        // Validation
       $this->validate($request, [
        'title'=>'required'
        ]);

        //Input File
       if ($file = $request->file('file')) {
        $name = $file->getClientOriginalName();

        $file->move('images', $name);

        $input['path'] = $name;

    } 


    Post::create($input);

    return redirect('posts'); 
}

    /**
     * Display the specified resource.
     *

     */
    public function show($id)
    {
       $post = Post::findOrFail($id);

       return view('posts.show', compact('post'));
   }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {


        $post = Post::findOrFail($id);

        $post->update($request->all());

        return redirect('posts'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();

        return redirect('posts'); 
    }
}
