<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
  protected $fillable = [
	    'property_id', 'g_img', 'g_thumb',
	];
   
  public function property() {
		return $this->belongsTo(\App\Property::class);
	}
}
