<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

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

Route::get('/authors/{user}', function (User $user) {

    return view('posts', [
        'headline' => 'Articles by ' . $user->name,
        'posts' => $user->posts
    ]);
});

Route::get('/types/{category}', function (Category $category) {

    return view('posts', [
        'headline' => 'Articles in the ' . $category->category_name . ' category',
        'posts' => $category->types
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['headline' => 'Contact Page']);
});
