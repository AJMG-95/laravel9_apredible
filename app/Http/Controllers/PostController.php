<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Process;
use App\Http\Requests\SavePostRequest;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();

        return view('posts.index', ['posts' => $posts]);
    }


    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }


    public function create()
    {
        return view('posts.create', ['post' => new Post]);
    }


    public function store(SavePostRequest $request)
    {

        /* $validated = $request->validate([
            'title' => ['required', 'min:5'],
            'body' => ['required']
        ] , [
            'title.required' => "El título del post es obligatorio",
            'title.min' => "El titulo del post requiere almenos 5 caracteres",
            'body.required' => "La descripción del post es obligatoria"
        ] ); */

        /* $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save(); */

        /* Post::create([
            'title' => $request->input('title'),
            'body' => $request->input('body')
        ]); */

        /* Post::create($validated); */

        Post::create($request->validated());
        /* session()->flash('status', 'New Post Created!'); */
        return to_route('posts.index')->with('status', 'New Post Created!');
    }


    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }


    public function update(SavePostRequest $request, Post $post)
    {
        /* $validated = $request->validate([
            'title' => ['required', 'min:5'],
            'body' => ['required']
        ]); */

        /* $post = Post::find($post); */

        /* $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save(); */

        /* $post->update([
            'title' => $request->input('title'),
            'body' => $request->input('body')
        ]); */

        /* $post->update($validated); */

        $post->update($request->validated());
        /* session()->flash('status', 'Post Updated!'); */
        return to_route('posts.show', $post)->with('status', 'Post Updated!');
    }


    public function destroy (Post $post)
    {
        $post->delete();
        return to_route('posts.index')->with('status', 'Post deleted');
    }

}
