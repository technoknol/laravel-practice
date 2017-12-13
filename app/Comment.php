<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 * @package App
 */
class Comment extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Post()
    {
        return $this->belongsTo(Post::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Child()
    {
        return $this->hasMany(Comment::class, 'parent_id', 'id'); //->where('parent_id' , '!=', 0);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Parent()
    {
        return $this->hasOne(Comment::class, 'id', 'parent_id'); //->where('parent_id' , '!=', 0);
    }

    /**
     * @return $this
     */
    public function Parents()
    {
        return $this->parent()->with('Parents');
    }

    /**
     * @return $this
     */
    public function Childs()
    {
        return $this->child()->with('Childs');
    }
}
