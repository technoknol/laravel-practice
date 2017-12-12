<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * User model related to Post model
     * @author Shyam Makwana
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function User()
    {
        return $this->belongsTo(User::class)->select(['id', 'name', 'email']);
    }


    /**
     * Post has many categories
     * @author Shyam Makwana
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function Categories()
    {
        return $this->belongsToMany(Category::class)->select(['name', 'slug']);
    }

    public function getCategoryNameAttribute()
    {
        if ($this->relationLoaded('categories')) {
            return $this->relations['categories']->pluck('name');
        }
        return null;
    }
}
