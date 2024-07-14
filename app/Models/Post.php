<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $table = 'blog_posts';
    protected $primary_key = 'id';
    protected $fillable = ['title', 'author_id', 'category_id', 'slug', 'body'];
    protected $with= ['author', 'category'];

    public function author(): BelongsTo
    {

        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {

        return $this->belongsTo(Category::class);
    }
}
