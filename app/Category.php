<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $hidden = [];

    public function posts()
    {
        return $this->belongsTo(Post::class);
    }
}
