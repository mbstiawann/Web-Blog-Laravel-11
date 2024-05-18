<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table= 'blog_posts';
    protected $primary_key= 'id';
    protected $fillable = ['title', 'author', 'slug', 'body'];
}
