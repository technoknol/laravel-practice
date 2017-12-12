<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @package App
 */
class Category extends Model
{

    /**
     * Categories can have multiple posts
     * @author Shyam Makwana
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function Posts() {
        return $this->belongsToMany(\App\Post::class);
    }
}
