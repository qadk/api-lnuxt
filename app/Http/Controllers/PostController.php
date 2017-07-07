<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return Post::all();
    }

    public function store(Request $request)
    {
        return Post::create($request->all());
    }

    public function show(Post $post)
    {
        return $post;
    }

    public function edit(Post $post)
    {
        return $post;
    }

    public function update(Post $post, Request $request)
    {
        $post->update($request->all());
        return 'success';
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return 'success';
    }
}
