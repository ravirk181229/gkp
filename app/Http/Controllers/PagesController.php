<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Category;
use App\Post;
use App\Property;
use App\Banner;

class PagesController extends Controller
{

    public function index()
    {
        $banners = Banner::get();
        $properties = Property::with(['amenities', 'flore_plans', 'gallery', 'address'])
                                ->take(3)
                                ->orderBy('id', 'desc')
                                ->get();
        return view('index',[
            'properties' => $properties,
            'banners' => $banners
        ]);
    }

    public function showProperty() {
        $properties = Property::with(['amenities', 'flore_plans', 'gallery', 'address'])
                                ->orderBy('id', 'desc')
                                ->get();
        return view('pages.property.property',[
            'properties' => $properties
        ]);
    }

    public function propertyDetail(Property $property) {
        $property = Property::with(['amenities', 'flore_plans', 'gallery', 'address'])
                                ->find($property->id);
        return view('pages.property.property_details', [
            'property' => $property
        ]);
    }
  public function blogCategories()
    {
    	$categories = Category::take(4)
                ->orderBy('id', 'desc')
                ->get();
        $posts = Post::orderBy('id', 'desc')
                ->paginate(4);
    	return view('pages.blog.blog', [
    		'categories' => $categories,
            'posts' => $posts
    	]);
    }
    public function singleBlog($id) {
        $post = Post::find($id);
        $categories = Category::take(4)
                ->orderBy('id', 'desc')
                ->get();
        return view('pages.blog.single_blog', [
            'post' => $post,
            'categories' => $categories
        ]);
    }

    public function about() {
        return view('pages/about');
    }

    public function careers() {
        return view('pages/careers');
    }
    public function contact() {
        return view('pages/contact');
    }

    public function policies() {
        return view('pages/policies');
    }

    public function term() {
        return view('pages/term');
    }

    public function pricing() {
        return view('pages/pricing');
    }
}
