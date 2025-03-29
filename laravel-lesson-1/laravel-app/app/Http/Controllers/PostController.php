<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index()
    {
        Log::info('index');
        $posts = Post::latest()->get();

        return view('index')->with(['posts' => $posts]);
    }

    public function show(Post $post)
    {
        Log::info('show');
        return view('posts.show')->with(['post' => $post]);
    }

    public function create()
    {
        Log::info('create');
        return view('posts.create');
    }

    public function store(PostRequest $request)
    {
        Log::info('store');

        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()->route('posts.index');
    }


    public function edit(Post $post)
    {
        Log::info('edit');
        return view('posts.edit')->with(['post' => $post]);
    }

    public function update(PostRequest $request, Post $post)
    {
        Log::info('update');

        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post)
    {
        Log::info('delete');

        $post->delete();

        return redirect()->route('posts.index');
    }

}
