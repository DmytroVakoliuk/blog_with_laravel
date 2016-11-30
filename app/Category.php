<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
//    protected $fillable = ['name'];

    /**
     * @return array
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
