<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Filesystem;
use App\category;
use App\Post;
use App\User;
use Illuminate\Database\Eloquent\paginate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;



class DashController extends Controller
{
    public function getTutorials() {
      $posts = Post::orderBy('created_at', 'desc')->paginate(10);
      return view('dashboard.tutorials')->with('posts', $posts);
    }

    public function newTutorial() {

      return view('dashboard.new-tutorial');
    }

    public function postTutorial() {
      //Validate Data
      $this->validate($request, array(
              'title' => 'required|max:255',
              'body'  => 'required',
              'category' => 'required'
          ));
      //Store in database
      $post = new Post;
      $s3 = Storage::disk('s3');

      if (Auth::check()) {
        $post->author = Auth::id();
      }

      $image = $request->file('image');

      $imageFileName = time() . '.' . $image->getClientOriginalExtension();
      $filePath =  $imageFileName;
      $s3->put($filePath, file_get_contents($image), 'public');

      $post->image_url = $s3->url($filePath);

      $post->title = $request->title;
      $post->body = $request->body;
      $post->category_id = $request->category;
      $post->save();

      //redirect
      return redirect()->route('post.show', $post->id);

    }


    public function getEditPost(Request $request, $id) {
      $singlePost = Post::find($id);
    	$user = User::find($singlePost->author);
      $message = '';
      return view('dashboard/dash-edit')->with('id', $id )
                                        ->with('singlePost', $singlePost)
                                        ->with('user', $user)
                                        ->with('message', $message);
    }


    public function putEditPost(Request $request, $id) {
      $editedPost = Post::find($id);
      $editedPost->title = $request->input('title');
      $editedPost->body = $request->input('body');
      $editedPost->category_id = $request->input('category');
      $newImage = $request->input('newImage');

      if ($newImage) {
        $s3 = Storage::disk('s3');
        $image = $request->file('image');
        $imageFileName = time() . '.' . $image->getClientOriginalExtension();
        $filePath =  $imageFileName;
        $s3->put($filePath, file_get_contents($image), 'public');
        $editedPost->image_url = $s3->url($filePath);
      }


      $editedPost->save();

      $message = 'Post saved!';
      return view('dashboard/dash-edit')->with('id', $id )
                                        ->with('message', $message)
                                        ->with('singlePost', $editedPost);
    }

    public function getDeletePost(Request $request, $id) {
      $singlePost = Post::find($id);
    	$user = User::find($singlePost->author);

      return view('dashboard/dash-delete')->with('id', $id )
                                          ->with('singlePost', $singlePost)
                                          ->with('user', $user);
    }

    public function deletePost(Request $request, $id) {
      $message = 'Post Deleted!';
      $post = Post::find($id);
      $post->delete();
      return view('dashboard/dash-delete-confirmed')->with('id', $id )
                                                    ->with('message', $message);

    }

}
