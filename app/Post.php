<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = [
      'user_id', 'title', 'slug', 'image', 'body',
  ];

		public function categories()
		{
		  return $this->belongsToMany(\App\Category::class, 'category_post');
		}
    
     public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
    public function comments()
    {
        return $this->morphMany(\App\Comment::class, 'commentable')->whereNull('parent_id');
    }
}
