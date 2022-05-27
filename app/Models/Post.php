<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function content()
    {
        $lang_code = LANG_CODE ?? 'en';
        return $this->hasOne(PostsContent::class)->where([
            'lang_code' => $lang_code,
        ]);
    }
}