<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
  protected $fillable = [
      'sortname', 'name', 'phonecode',
  ];
  public function states() {
  	return $this->hasMany(\App\State::class);
  }  
}
