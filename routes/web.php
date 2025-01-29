<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

Route::get('/', function () {

    $document = YamlFrontMatter::parseFile(
        resource_path('posts/my-first-post.html'),
    );

    dd($document->title);

    // return view('posts', [
    //     'posts' => Post::all()
    // ]);
});

Route::get('posts/{post}', function ($slug) {
    return view('post', [
        'post' => Post::find($slug)
    ]);
});




