<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;

class BannerController extends Controller
{   
  public function index()
  {
    $banners = Banner::all();
     return view('admin.pages.banner.index', ['banners' => $banners]);
  }

  public function create( Banner $banner)
  {
    return view('admin.pages.banner.create');
  }
  
  public function store(Request $request)
  {   
    $request->validate([
      'video_url' => ['required', 'max:250'],
    ]);  
    Banner::create($request->all());   
    return redirect()->route('banner.create')
                    ->with('success','Banner created successfully.');
  }   
   
  public function edit(Banner $banner)
  {
    return view('admin.pages.banner.edit', ['banner' => $banner]);
  }  

  public function update(Request $request, Banner $banner)
    {
       $data = $request->validate([
          'video_url' => ['required', 'max:250'],
        ]);
        $banner->update($data);
        return redirect()->route('banner.index')->with('info', 'Banner Update Successfully');
    }

  
  public function destroy(Banner $banner)
  {
      $banner->delete();
      return redirect()->route('banner.index')->with('warning', 'Banner Deleted Successfully');
  }
}
