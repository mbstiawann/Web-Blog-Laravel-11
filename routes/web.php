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
        'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(9)->withQueryString()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    return view('post', [
        'headline' => 'Single Post',
        'post' => $post
    ]);
});

Route::get('/authors/{user:username}', function (User $user) {

    return view('posts', [
        'headline' => count($user->posts) . ' Articles by ' . $user->name,
        'posts' => $user->posts
    ]);
});

Route::get('/types/{category:slug}', function (Category $category) {

    return view('posts', [
        'headline' => count($category->posts) . ' Articles in the ' . $category->category_name . ' category',
        'posts' => $category->posts
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['headline' => 'Contact Page']);
});
