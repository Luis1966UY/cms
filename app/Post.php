<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Support\Facades\Storage;

class Post extends Model
{

    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'content', 'image', 'published_at', 'category_id'
    ];

    /**
     * Delete post image form storage
     *
     * @return void
     */
    public function deleteImage()
    {
        Storage::delete($this->image);
    }

    /**
     * Relation with Category database table
     *
     * @return Category object
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
