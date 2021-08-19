<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Amenity;

class AmenityController extends Controller
{   
  public function index()
  {
    $amenities = Amenity::all();
     return view('admin.pages.amenity.index', ['amenities' => $amenities]);
  }

  public function create( Amenity $amenity)
  {
    return view('admin.pages.amenity.create');
  }
  
  public function store(Request $request)
  {   
    $request->validate([
      'name'  => 'required|unique:amenities,name|max:255',
    ]);  
    Amenity::create($request->all());   
    return redirect()->route('amenity.create')
                    ->with('success','Amenity created successfully.');
  }   
   
  public function edit(Amenity $amenity)
  {
    return view('admin.pages.amenity.edit', ['amenity' => $amenity]);
  }  

  public function update(Request $request, Amenity $amenity)
    {
       $data = $request->validate([
          'name'  => 'required|unique:amenities,name|max:255',
        ]);
        $amenity->update($data);
        return redirect()->route('amenity.index')->with('info', 'Amenity Update Successfully');
    }

  
  public function destroy(Amenity $amenity)
  {
      $amenity->delete();
      return redirect()->route('amenity.index')->with('warning', 'Amenity Deleted Successfully');
  }
}
