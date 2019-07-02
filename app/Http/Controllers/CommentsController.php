<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
  public function index()
  {
    // dd('comments');
    $comments = Comment::get();
    return view('comments.index')
            ->with('comments', $comments);
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'body' => 'required'
    ]);

    $comment = new Comment();
    $comment->body = $request->body;
    $comment->save();
    return redirect('/comments');
  }
}
