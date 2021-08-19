<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
class CountryController extends Controller
{   
  public function index()
  {
    $countries = Country::all();
     return view('admin.pages.country.index', ['countries' => $countries]);
  }

  public function create( Country $country)
  {
    return view('admin.pages.country.create');
  }
  
  public function store(Request $request)
  {   
    $request->validate([
      'sortname' => ['required', 'max:10'],
      'name' => ['required', 'max:100'],
      'phonecode' => ['required', 'max:30']
    ]);  
    Country::create($request->all());   
    return redirect()->route('country.create')
                    ->with('success','Country created successfully.');
  }   
  
  public function show($id)
  {
    
  }
   
  public function edit(Country $country)
  {
    return view('admin.pages.country.edit', ['country' => $country]);
  }  

  public function update(Request $request, Country $country)
    {
       $data = $request->validate([
          'sortname' => ['required', 'max:10'],
          'name' => ['required', 'max:100'],
          'phonecode' => ['required', 'max:30']
        ]);
        $country->update($data);
        return redirect()->route('country.index')->with('info', 'Country Update Successfully');
    }

  
  public function destroy(Country $country)
  {
      $country->delete();
      return redirect()->route('country.index')->with('warning', 'Country Deleted Successfully');
  }
}
