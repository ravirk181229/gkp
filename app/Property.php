<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
	protected $fillable = [
	    'title', 'min_price', 'max_price', 'price_unit', 'details', 'list_details', 'size',  'unit', 'video_url', 'is_varified', 'is_sold',
	];

	public function amenities() {
		return $this->belongsToMany(\App\Amenity::class, 'amenity_property', 'property_id', 'amenity_id');
	}

	public function flore_plans() {
		return $this->hasMany(\App\FlorePlan::class);
	}
	public function gallery() {
		return $this->hasMany(\App\Gallery::class);
	}
	public function address() {
		return $this->hasOne(\App\Address::class);
	}
}
