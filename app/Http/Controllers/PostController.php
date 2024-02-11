<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::get();
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'title'=> ['required','min:6'],
            'content'=> ['required']

        ]);

        //
        $post = new Post;
        $post->title = $request-> input('title');
        $post->content = $request-> input('content');
        $post->save();

        session()->flash('status','Post creado exitosamente');

        return redirect()->route('posts.index');
      //return to_route('posts.index')
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        
        //return Post::findOrFail($id);
        // return $post = Post::find($post->id);
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        
        
        return view('posts.edit', ['post' => $post]);
        //return ($post);
    }

    public function delete(Post $post)
    {
        
        
        return view('posts.delete', ['post' => $post]);
        //return ($post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
        $request->validate([

            'title'=> ['required','min:6'],
            'content'=> ['required']

        ]);

        //
        //$post = Post::find($post);
        $post->title = $request-> input('title');
        $post->content = $request-> input('content');
        $post->save();
        session()->flash('status','Editado correctamente');
       
        return redirect()->route('posts.index');
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        //return 'Post eliminado';
        return redirect()->route('posts.index');
    }
}
