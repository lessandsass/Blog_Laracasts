<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

Route::get('/', function () {

    $posts = collect(File::files(resource_path("posts/")))
        ->map(function ($file) {
            return YamlFrontMatter::parseFile($file);
        })
        ->map(function ($document) {
            return new Post (
                $document->title,
                $document->excerpt,
                $document->date,
                $document->body(),
                $document->slug
            );
        });

    return view('posts', [
        'posts' => $posts
    ]);
});

Route::get('posts/{post}', function ($slug) {
    return view('post', [
        'post' => Post::find($slug)
    ]);
});




