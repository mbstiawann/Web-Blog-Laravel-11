<?php

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
        'posts' => [
            [
                'id' => '1',
                'slug'=> 'judul-1',
                'title' => 'Judul 1',
                'author' => 'Muhammad Bagus Setiawan',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore blanditiis, necessitatibus cupiditate repellendus ratione quia ad ut dicta rem cumque debitis officia harum laudantium corporis? Quasi quae alias voluptate dicta dolores minus, quod quaerat nobis accusantium velit. Vitae, laudantium quasi. Numquam, ad molestias. Id nesciunt ducimus adipisci possimus iure quibusdam?'
            ],
            [
                'id' => '2',
                'slug'=> 'judul-2',
                'title' => 'Judul 2',
                'author' => 'Julietha Sekar Pambayun',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore blanditiis, necessitatibus cupiditate repellendus ratione quia ad ut dicta rem cumque debitis officia harum laudantium corporis? Quasi quae alias volu'
            ]
        ]
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => '1',
            'slug'=> 'judul-1',
            'title' => 'Judul 1',
            'author' => 'Muhammad Bagus Setiawan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore blanditiis, necessitatibus cupiditate repellendus ratione quia ad ut dicta rem cumque debitis officia harum laudantium corporis? Quasi quae alias voluptate dicta dolores minus, quod quaerat nobis accusantium velit. Vitae, laudantium quasi. Numquam, ad molestias. Id nesciunt ducimus adipisci possimus iure quibusdam?'
        ],
        [
            'id' => '2',
            'slug'=> 'judul-2',
            'title' => 'Judul 2',
            'author' => 'Julietha Sekar Pambayun',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore blanditiis, necessitatibus cupiditate repellendus ratione quia ad ut dicta rem cumque debitis officia harum laudantium corporis? Quasi quae alias volu'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] === $slug;
    });

    return view('post', [
        'headline'=> 'Single Post',
        'post'=> $post
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['headline' => 'Contact Page']);
});
