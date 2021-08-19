<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlorePlan extends Model
{
	protected $fillable = [
	    'property_id', 'img', 'thumb',
	];
   
  public function property() {
		return $this->belongsTo(\App\Property::class);
	}
}
