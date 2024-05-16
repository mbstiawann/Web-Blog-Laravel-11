<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return
            [
                [
                    'id' => '1',
                    'slug' => 'judul-1',
                    'title' => 'Judul 1',
                    'author' => 'Muhammad Bagus Setiawan',
                    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore blanditiis, necessitatibus cupiditate repellendus ratione quia ad ut dicta rem cumque debitis officia harum laudantium corporis? Quasi quae alias voluptate dicta dolores minus, quod quaerat nobis accusantium velit. Vitae, laudantium quasi. Numquam, ad molestias. Id nesciunt ducimus adipisci possimus iure quibusdam?'
                ],
                [
                    'id' => '2',
                    'slug' => 'judul-2',
                    'title' => 'Judul 2',
                    'author' => 'Julietha Sekar Pambayun',
                    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore blanditiis, necessitatibus cupiditate repellendus ratione quia ad ut dicta rem cumque debitis officia harum laudantium corporis? Quasi quae alias volu'
                ]
            ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
