<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts');
});

Route::get('post', function () {
    return view('post', [
        'post' => file_get_contents(__DIR__ . '/../resources/posts/my-first-post.html')
    ]);
});




