<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Post extends Model
{
    protected $fillable = ['title', 'content', 'image_path'];


    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}



