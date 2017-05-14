<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'content', 'category_id', 'user_id'];

    /**
     * Category that thread belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * User who created thread
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Posts in thread
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Check if thread has posts
     *
     * @return bool
     */
    public function hasPosts()
    {
        return $this->posts->count() > 0 ? true : false;
    }

    /**
     * Return user that reply as last or user that created thread
     *
     * @return \App\User
     */
    public function lastReplyUser()
    {
        if($this->hasPosts())
            return $this->posts->last()->user;

        return $this->user;
    }

    /**
     * Return last reply created date or thread created date
     *
     * @return \Date
     */
    public function lastReplyDate()
    {
        if($this->hasPosts())
            return $this->posts->last()->created_at;

        return $this->created_at;
    }
}
