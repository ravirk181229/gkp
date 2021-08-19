<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Category;


class CategoryController extends Controller
{
  public function index() {
		$categories = Category::all();
		return view('admin.pages.category.index', ['categories' => $categories]);
	}
	public function create(Category $Category)
	{
	return view('admin.pages.category.create');
	}


	public function store(Request $request)
  {
    $request->validate([
      'name'  => 'required|unique:categories,name|max:255',
      'image'  => ['required'],
    ]);
    $category_image = $request->file('image');
    $slug  = str_slug($request->name);

      $galleryimagename = $slug.'-'.time() . '_original_.' . $category_image->getClientOriginalExtension();     
      $image = Image::make($category_image->getRealPath());
      $image->resize(300, 300, function($const) {
        $const->aspectRatio();
      })->save(public_path('storage/category_image/' .$galleryimagename));
      Category::create([
      	'name' => $request->name,
        'image' => $galleryimagename,
        'slug' => $slug,
      ]);
    return redirect()->route('category.create')
                    ->with('success','Cagegory created successfully.');
  }

  public function edit(Category $category)
  {
    return view('admin.pages.category.edit', [
      'category' => $category,
    ]);
  }

    public function update(Request $request, Category $category)
    {

       $data = $request->validate([
          'name'  => 'required|unique:categories,name|max:255',
        ]);
        $category->update($data);
        if($request->hasFile('image')) {         
            unlink('storage/category_image/'. $category->image);            
            $category->delete();

            $category_image = $request->file('image');
            $slug  = str_slug($request->name);

            $galleryimagename = $slug.'-'.time() . '_original_.' . $category_image->getClientOriginalExtension();     
            $image = Image::make($category_image->getRealPath());
            $image->resize(300, 300, function($const) {
              $const->aspectRatio();
            })->save(public_path('storage/category_image/' .$galleryimagename));
            Category::create([
              'name' => $request->name,
              'image' => $galleryimagename,
              'slug' => $slug,
            ]);
          }
        return redirect()->route('category.index')->with('info', 'Category Update Successfully');
    }

    public function destroy(Category $category)
    {
      unlink('storage/category_image/'. $category->image);            
        $category->delete();
      return redirect()->route('category.index')->with('warning', 'Category Deleted Successfully');
    }
}
