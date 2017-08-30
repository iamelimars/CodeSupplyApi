<?php

namespace App\Http\Controllers;

use App\category;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Request $request, $id) {
      $categoryTitle = category::where('id', '=', $id)->take(1)->get();
      $posts = Post::where('category_id', '=', $id)->orderBy('created_at', 'desc')->paginate(16);
      return view('category')->with(compact(
        'categoryTitle',
        'posts'
        ));
    }

    public function showRecent() {
        $recentPosts = Post::orderBy('created_at', 'desc')->paginate(4);
        return view('recent')->with(compact('recentPosts'));
    }
}
