<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * @package App
 */
class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'body'];

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

    /**
     * @return null
     */
    public function getCategoryNameAttribute()
    {
        if ($this->relationLoaded('categories')) {
            return $this->relations['categories']->pluck('name');
        }
        return null;
    }
}
