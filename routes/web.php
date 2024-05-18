<?php


use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('home', ['headline' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['headline' => 'About Page']);
});

Route::get('/posts', function () {
    return view('posts', [
        'headline' => 'Blog Page',
        'posts' => Post::all()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    return view('post', [
        'headline' => 'Single Post',
        'post' => $post
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['headline' => 'Contact Page']);
});
