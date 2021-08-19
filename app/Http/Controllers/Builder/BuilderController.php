<?php

namespace App\Http\Controllers\Builder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Property;
use App\Amenity;
use App\FlorePlan;
use App\Gallery;
use App\Address;
use App\Country;
use App\State;
use App\City;
use Intervention\Image\Facades\Image;

class BuilderController extends Controller
{
  // public function index() {
  // 	return view('user.builder.index');
  // }
  public function create( Request $request)
  { 
    $countries = Country::get();
    $states = State::get();
    $cities = City::get();
    $amenities = Amenity::get();   
    return view('user.builder.create', [
      'amenities' => $amenities,
      'countries' => $countries,
      'states' => $states,
      'cities' => $cities, 
    ]);
  }


  public function store(Request $request)
  {
    $request->validate([
        'title' => ['required', 'max:100'],
        'min_price' => ['required', 'max:100'],
        'max_price' => ['required', 'max:100'],
        'details' => ['required'],
        'list_details' => ['required'],
        'price_unit' => ['required', 'max:100'],
        'video_url' => ['required', 'max:250'],
        'ad_line_1' => ['required'],
        'ad_line_2' => ['required'],
        'country_id' => ['required'],
        'state_id' => ['required'],
        'city_id' => ['required'],
        'land_mark' => ['required'],
        'pin_code' => ['required'],
      ]);
    $property = Property::create($request->all());
    $flore_images = $request->file('img');
    foreach ($flore_images as $key => $flore_image) {
      $floreimagename = time() . ($key+1) . '_original_.' . $flore_image->getClientOriginalExtension();
      $florethumbname = time() . ($key+1) . '_thumb_.' . $flore_image->getClientOriginalExtension();
      $image = Image::make($flore_image->getRealPath());
      $image->save(public_path('storage/flore_plan/' .$floreimagename));
      $image->resize(300, 300, function($const) {
        $const->aspectRatio();
      })->save(public_path('storage/flore_plan/thumb/' .$florethumbname));
      FlorePlan::create([
        'property_id' => $property->id,
        'img' => $floreimagename,
        'thumb' => $florethumbname,
      ]);
    }
    $gallery_images = $request->file('g_img');
    foreach ($gallery_images as $key => $gallery_image) {
      $galleryimagename = time() . ($key+1) . '_original_.' . $gallery_image->getClientOriginalExtension();
      $gallerythumbname = time() . ($key+1) . '_thumb_.' . $gallery_image->getClientOriginalExtension();
      $image = Image::make($gallery_image->getRealPath());
      $image->save(public_path('storage/gallery/' .$galleryimagename));
      $image->resize(300, 300, function($const) {
        $const->aspectRatio();
      })->save(public_path('storage/gallery/thumb/' .$gallerythumbname));
      Gallery::create([
        'property_id' => $property->id,
        'g_img' => $galleryimagename,
        'g_thumb' => $gallerythumbname,
      ]);
    }
    Address::create([
      'property_id' => $property->id,
      'ad_line_1' => $request->ad_line_1,
      'ad_line_2' => $request->ad_line_2,
      'country_id' => $request->country_id,
      'state_id' => $request->state_id,
      'city_id' => $request->city_id,
      'land_mark' => $request->land_mark,
      'pin_code' => $request->pin_code,
    ]);
    // $countries = $request->country;
    $property->amenities()->sync($request->amenities);
    return redirect()->route('builder.create')
                    ->with('success','Property created successfully.');
  }   
}
