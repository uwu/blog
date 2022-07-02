<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        return view('posts.posts', ['posts' => $posts]);
    }

    public function viewPost($id)
    {
        $post = Post::where('id', $id)->first();
        $author = User::where('name', $post->author)->first();
        return view('posts.view', ['post' => $post, 'author' => $author]);
    }
}
