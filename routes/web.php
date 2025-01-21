<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts');
});

Route::get('posts/{post}', function ($slug) {

    // Find a post by its slug and pass it to a view called 'post'

    $post = Post::find($slug);

    return view('post', [
        'post' => $post
    ]);
});




