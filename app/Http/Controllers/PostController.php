<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use App\Category;
use Auth;
use App\Post;

class PostController extends Controller
{
   public function index() {
   		$posts = Post::all();
   		return view('admin.pages.post.index', ['posts' => $posts]);
   }
		public function create(Post $post)
		{
			$posts = Post::get();
			$categories = Category::get();		
			return view('admin.pages.post.create', [			  
			  'posts' => $posts,
			  'categories' => $categories,
			]);
		}

	public function store(Request $request)
  {
    $request->validate([
    	'user_id' => ['required'],
      'title'  => 'required|unique:posts,title|max:255',
      'categories' => ['required'],
      'body' => ['required'],
    ]);    
  
    $post_image = $request->file('image');
    $slug  = str_slug($request->title);      
      $postimagename = $slug.'-'.time() . '_original_.' . $post_image->getClientOriginalExtension();     
      $image = Image::make($post_image->getRealPath());
      $image->resize(300, 300, function($const) {
        $const->aspectRatio();
      })->save(public_path('storage/post_image/' .$postimagename));

      $post = new Post();
      $post->user_id = Auth::id();
      $post->title = $request->title;
      $post->slug = $slug;
      $post->image = $postimagename;
      $post->body = $request->body;
      $post->save();

      $post->categories()->sync($request->categories);
      return redirect()->route('post.create')
                    ->with('success','Post created successfully.');
  }

  public function edit(Post $post)
  {
    $categories = Category::get();
    return view('admin.pages.post.edit', [
      'post' => $post,
      'categories' => $categories,
    ]);
  }

  public function update(Request $request, Post $post)
    {
      $input =  $request->validate([
          'user_id' => ['required'],
          'title'  => 'required|max:255',
          'categories' => ['required'],
          'body' => ['required'],
        ]);      
      $slug = str_slug($request->title);
          $post_image = $request->file('image');
        if($post_image) {         
          unlink('storage/post_image/'. $post->image);
          $postimagename = $slug.'-'.time() . '_original_.' . $post_image->getClientOriginalExtension();     
          $image = Image::make($post_image->getRealPath());
          $image->resize(300, 300, function($const) {
            $const->aspectRatio();
          })->save(public_path('storage/post_image/' .$postimagename));
          $input['image'] = $postimagename;
        } else {
          $input['image'] = $post->image;
        }
        $post->update([
          'user_id' => Auth::id(),
          'title' => $request->title,
          'slug' => $slug,
          'image' => $input['image'],
          'body' => $request->body,
        ]);
        $post->categories()->sync($request->categories);
      return redirect()->route('post.index')->with('info', 'Post Update Successfully');
    }

    public function destroy(Post $post)
    {
      unlink('storage/post_image/'. $post->image);            
        $post->delete();
      return redirect()->route('post.index')->with('warning', 'Post Deleted Successfully');
    }
}
