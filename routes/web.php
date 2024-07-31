<?php

use App\Models\Post;
use App\Models\Posts;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\View\View;

$posts = Posts::allPosts();

Route::get('/', function () use ($posts): View {
    return view('posts.index', [
        'posts' => $posts
    ]);
});

Route::get('/posts/{slug}', function (string $slug) use ($posts): View {
    $post = $posts->where('slug', $slug)->first();

    abort_if(is_null($post),404);

    return view('posts.show', [
        'post' => $post
    ]);
});

Route::get('/authors/{author}', function (string $author) use ($posts): View {

    $authorPosts = $posts->filter(
            function (Post $post) use ($author): bool {
                return $post->author == $author;
            }
        );

    $authorName = $authorPosts->first()->author_name ?? '';

    return view('authors.show', [
        'posts' => $authorPosts,
        'authorName' => $authorName
    ]);
});

Route::get('/tags/{tag}', function (string $tag) use ($posts): View {

    $tagPosts = $posts->filter(
            function (Post $post) use ($tag): bool {
                return in_array($tag, $post->tags);
            }
        );

    return view('tags.show', [
        'posts' => $tagPosts,
        'tag' => $tag
    ]);
});
