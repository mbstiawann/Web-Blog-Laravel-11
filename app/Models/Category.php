<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $table= 'categories';
    protected $primary_key= 'id';
    
    protected $fillable = [
        'category_name'
    ];

    public function types(): HasMany
    {
        return $this->hasMany(Post::class, 'category_id');
    }
}
