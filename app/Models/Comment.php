<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    
    /**
     * post
     *
     * @return void
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}