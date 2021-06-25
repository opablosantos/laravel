<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;

Route::get('/', function () {
    $files = File::files(resource_path("posts/"));

    $posts = array_map(function($file) {
        $document = YamlFrontMatter::parseFile($file);
        return new Post(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body(),
            $document->slug
        );
    }, $files);

    return view('posts', ['posts' => $posts]);

    //return view('posts')->with('posts', Post::all());
});

Route::get('posts/{post}', function ($slug) {
    return view('post', [
        'post'=> Post::find($slug)
    ]);
})->where('post', '[A-z_\-]+');