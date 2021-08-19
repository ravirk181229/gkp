<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $fillable = [
	    'user_id', 'parent_id', 'name', 'email', 'body', 'commentable_id', 'commentable_type',
	];

	public function posts() {
		return $this->belongsTo(\App\Post::class);
	}

	public function user() {
		return $this->belongsTo(\App\User::class);
	}
}
