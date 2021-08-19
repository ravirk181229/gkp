<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'is_admin', 'company_name', 'country_id', 'state_id', 'city_id', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function country() {
        return $this->hasOne(\App\Country::class);
    }
    public function state() {
        return $this->hasOne(\App\State::class);
    }
    public function city() {
        return $this->hasOne(\App\City::class);
    }
    public function posts()
    {
        return $this->hasMany(\App\Post::class);
    }

    // public function user()
    // {
    //     return $this->belongsTo(\App\User::class);
    // }
}
