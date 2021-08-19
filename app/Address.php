<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
  protected $fillable = [
      'property_id', 'ad_line_1', 'ad_line_2', 'land_mark', 'pin_code', 'country_id', 'state_id', 'city_id',
    ];

  public function property() {
		return $this->belongsTo(\App\Property::class);
	}
	public function country() {
		return $this->belongsTo(\App\Country::class);
	}
	public function state() {
		return $this->belongsTo(\App\State::class);
	}
	public function city() {
		return $this->belongsTo(\App\City::class);
	}
}
