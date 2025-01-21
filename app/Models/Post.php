<?php

namespace App\Models;

class Post
{
    public static function find($slug)
    {
        $path = resource_path("posts/{$slug}.html");

        if (!file_exists($path)) {
            abort(404);
        }

        return cache()->remember("posts.{$slug}", 3600, function () use ($path) {
            return file_get_contents($path);
        });
    }
}










