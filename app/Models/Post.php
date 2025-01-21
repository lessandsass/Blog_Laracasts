<?php

namespace App\Models;

class Post
{
    public static function find($slug)
    {
        $path = __DIR__ . "/../resources/posts/{$slug}.html";

        if (!file_exists($path)) {
            return redirect('/');
        }

        return cache()->remember("posts.{$slug}", 3600, function () use ($path) {
            return file_get_contents($path);
        });
    }
}










