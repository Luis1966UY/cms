<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

   /** 
     * Relation with Post database table
     * 
     * @return Post object
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
