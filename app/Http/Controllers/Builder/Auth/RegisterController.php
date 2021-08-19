<?php

namespace App\Http\Controllers\Builder\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Country;
use App\State;
use App\City;
use App\User;
use Auth;
class RegisterController extends Controller
{
	use RegistersUsers;


	protected $redirectTo = 'builder/dashboard';

  	public function __construct()
	{	
	  	$this->middleware('guest');
	}

	public function showRegisterForm() {
  	$countries = Country::get();
    $states = State::get();
    $cities = City::get();
  	return view('builder.auth.register', [
   			'countries' => $countries,
	        'states' => $states,
	        'cities' => $cities,
   		]);
  }


  protected function validator(array $data)
    {
        return Validator::make($data, [        
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'string'],
            'country_id' => ['required', 'string'],
            'state_id' => ['required', 'string'],
            'city_id' => ['required', 'string'],
            'company_name' => ['required', 'string'],            
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'country_id' => $data['country_id'],
            'state_id' => $data['state_id'],
            'city_id' => $data['city_id'],
            'company_name' => $data['company_name'],
        ]);
    }
}
