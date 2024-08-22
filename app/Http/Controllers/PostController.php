<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostDetailResource;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index ()
    {
        $posts = Post::query()->with('user')->latest()->get();
        return PostResource::collection($posts);
    }

    public function create ()
    {

    }

    public function show ($id)
    {
        $post = Post::findOrFail($id)->load('user');
        return new PostDetailResource($post);
    }
}
