<?php

namespace App\Http\Controllers;
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
class PropertyController extends Controller
{   
  public function index()
  {
    $properties = Property::all();
     return view('admin.pages.property.index', ['properties' => $properties]);
  }

  public function create( Property $property)
  {  
    $properties = Property::get();
    $countries = Country::get();
    $states = State::get();
    $cities = City::get();
    $amenities = Amenity::get();   
    return view('admin.pages.property.create', [
      'amenities' => $amenities,
      'countries' => $countries,
      'states' => $states,
      'cities' => $cities,
      'properties' => $properties,
    ]);
  }
  
  public function store(Request $request)
  {
    $request->validate([
        'title' => ['required', 'max:100'],
        'min_price' => ['required', 'max:100'],
        'max_price' => ['required', 'max:100'],
        'size' => ['required'],
        'unit' => ['required'],
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
    return redirect()->route('property.create')
                    ->with('success','Property created successfully.');
  }   
   
   public function show(Property $property)
  {
    // dd($property->with('address')->find($property->id));
    $property = Property::with('address', 'amenities', 'flore_plans', 'gallery')->find($property->id);

    return view('index', ['property' => $property]);
  }

  public function edit(Property $property)
  {
    $countries = Country::get();
    $states = State::get();
    $cities = City::get();
    $amenities = Amenity::get();
    return view('admin.pages.property.edit', [
      'property' => $property,
      'countries' => $countries,
      'states' => $states,
      'cities' => $cities,
      'amenities' => $amenities,
    ]);
  }  

  public function update(Request $request, Property $property)
    {
       $data = $request->validate([
					'title' => ['required', 'max:100'],
					'min_price' => ['required', 'max:100'],
					'max_price' => ['required', 'max:100'],
          'size' => ['required'],
          'unit' => ['required'],
					'details' => ['required'],
					'list_details' => ['required'],
					'price_unit' => ['required', 'max:100'],
					'video_url' => ['max:250'],
          'ad_line_1' => ['required'],
          'ad_line_2' => ['required'],
          'country_id' => ['required'],
          'state_id' => ['required'],
          'city_id' => ['required'],
          'land_mark' => ['required'],
          'pin_code' => ['required'],
        ]);
        $property->update($data);
        // dd($request->img);
        if($request->hasFile('img')) {
          foreach ($property->flore_plans as $key => $image) {
            unlink('storage/flore_plan/'. $image->img);
            unlink('storage/flore_plan/thumb/'. $image->thumb);
            $image->delete();
          }       
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
        }
      if($request->hasFile('g_img')) {
        foreach ($property->gallery as $key => $image) {
          unlink('storage/gallery/'. $image->g_img);
          unlink('storage/gallery/thumb/'. $image->g_thumb);
          $image->delete();
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
      }
        $property->address()->update([
          'property_id' => $property->id,
          'ad_line_1' => $request->ad_line_1,
          'ad_line_2' => $request->ad_line_2,
          'country_id' => $request->country_id,
          'state_id' => $request->state_id,
          'city_id' => $request->city_id,
          'land_mark' => $request->land_mark,
          'pin_code' => $request->pin_code,
        ]);
       $property->amenities()->sync($request->amenities);
        return redirect()->route('property.index')->with('info', 'Property Update Successfully');
    }

  
  public function destroy(Property $property)
  {
  
          foreach ($property->flore_plans as $key => $image) {
            unlink('storage/flore_plan/'. $image->img);
            unlink('storage/flore_plan/thumb/'. $image->thumb);
            $image->delete();
          }

    
        foreach ($property->gallery as $key => $image) {
          unlink('storage/gallery/'. $image->g_img);
          unlink('storage/gallery/thumb/'. $image->g_thumb);
          $image->delete();
        }
    
      $property->delete();
      return redirect()->route('property.index')->with('warning', 'Property Deleted Successfully');
  }

  public function verified(Request $request)
    {
      $property = Property::find($request->property_id);
      $property->is_varified = $request->is_varified;
      $property->save();
      return response()->json(['success'=>'Now Property verified!!']);
    }
    public function sold(Request $request)
    {
      $property = Property::find($request->property_id);
      $property->is_sold = $request->is_sold;
      $property->save();
      return response()->json(['success'=>'Now Property Sold!!']);
    }
}
