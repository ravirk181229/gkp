<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use App\User;

class CommentController extends Controller
{
  	public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'comment_body' => ['required'],
          ]);
        $comment = new Comment;
        $comment->name = $request->get('name');
        $comment->email = $request->get('email');
        $comment->body = $request->get('comment_body');
        $comment->user()->associate($request->user());
        $post = Post::find($request->get('post_id'));
        $post->comments()->save($comment);
        return back();
    }
}
