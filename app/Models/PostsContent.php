<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostsContent extends Model
{
    use HasFactory;

    /**
     * Получить пост
     */
    public function post()
    {
        return $this->belongsTo(Post::class, 'id', 'blog_id');
    }
}
