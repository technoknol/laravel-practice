<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public function Posts() {
        return $this->belongsTo(\App\Post::class);
    }
}
