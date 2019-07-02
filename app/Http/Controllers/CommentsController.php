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
}
