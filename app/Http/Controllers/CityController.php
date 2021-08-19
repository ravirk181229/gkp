<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;
use App\City;

class CityController extends Controller
{
   public function index() {
   	$cities = City::all();
   	return view('admin.pages.city.index', ['cities' => $cities]);
   }

   public function create( City $city)
  {
  	$states = State::all();
    return view('admin.pages.city.create', ['states' => $states]);
  }


  public function store(Request $request)
  {   
    $request->validate([
      'name' => ['required', 'max:100'],
      'state_id' => ['required']
    ]);  
    City::create($request->all());   
    return redirect()->route('city.create')
                    ->with('success','City created successfully.');
  }

   public function edit(City $city) {
  	$states = State::all();
  	return view('admin.pages.city.edit', ['city' => $city], ['states' => $states]);
  }

  public function update(Request $request, City $city)
    {
       $data = $request->validate([          
          'name' => ['required', 'max:100'],
          'state_id' => ['required']
        ]);
        $city->update($data);
        return redirect()->route('city.index')->with('info', 'City Update Successfully');
    }
     public function destroy(City $city) {
      $city->delete();
      return redirect()->route('city.index')->with('warning', 'City Deleted Successfully');
    }
}
