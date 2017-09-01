<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Filesystem\Filesystem;
use App\category;
use App\Post;
use App\User;
use Newsletter;
use Illuminate\Database\Eloquent\paginate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;




class PostController extends Controller
{

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
						// $posts = Post::orderBy('created_at', 'desc')->get();
            // $categories = category::All();
            // return view('home')->with('categories', $categories)
						// 										->with('posts', $posts);
						return redirect()->route('dash.getTutorials');
        } else {
            return redirect()->route('login');
        }


    }

    public function listPosts() {
    	$posts = Post::paginate(4);

        $categories = category::All();
        $latestPosts = Post::orderBy('created_at', 'desc')->take(4)->get();
    	$frontendPosts = Post::where('category_id', '=', 1)->take(4)->get();
        $backendPosts = Post::where('category_id', '=', 2)->take(4)->get();
        $fullstackPosts = Post::where('category_id', '=', 3)->take(4)->get();

        return view('welcome')->with(compact(
            'categories',
            'latestPosts',
            'frontendPosts',
            'backendPosts',
            'fullstackPosts'));
    }

    public function store(Request $request) {
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


    public function show(Request $request, $id) {

    	$singlePost = Post::find($id);
    	$user = User::find($singlePost->author);

    	return view('post')->with('post', $singlePost)->with('user', $user);
    }


		public function subscribe(Request $request) {
			$email = $request->input('signUpEmail');
			$sent = Newsletter::subscribe($email , 'Test list');
			$error = Newsletter::getLastError();
			$succeed = Newsletter::lastActionSucceeded(); //returns a bool

			return view('subscribe')->with('email', $email)->with('error', $error)->with('succeed', $succeed)->with('sent', $sent);
		}



    // api functions

    public function apiNewPost(Request $request) {
        $post = new Post;

        $s3 = Storage::disk('s3');
        $image = $request->file('image');
        // if (!$image) {
        //     return response()->json([$request->all()], 401);
        // }
        // else {
        //     return response()->json([$request->all()], 201);
        // }
        // if (!$image_url) {
        //     $post->image_url = $request->input('imageUrl');
        // } else {
        //     $post->image_url = $s3->url($filePath);
        // }

        $imageFileName = time() . '.' . $image->getClientOriginalExtension();
        $filePath =  $imageFileName;
        $s3->put($filePath, file_get_contents($image), 'public');
        $post->image_url = $s3->url($filePath);




        $post->author = 1;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->category_id = $request->input('category_id');
        // $post->image_url = $request->input('image_url');
        $post->save();

        return response()->json(['post' => $post], 201);

    }

    public function apiGetPosts() {
        $posts = Post::paginate(4);
        $response = [
            'posts' => $posts
        ];
        return response()->json($response, 200);
    }

    public function apiGetCategory(Request $request, $id) {
        $categoryTitle = category::where('id', '=', $id)->take(1)->get();
        $posts = Post::where('category_id', '=', $id)->paginate(10);

        $response = [
            'posts'             => $posts,
            'category_title'    => $categoryTitle
        ];

        return response()->json($response, 200);

    }

    public function apiSinglePost($id) {
        $singlePost = Post::find($id);
        $user = User::find($singlePost->author);

        $response = [
          'post' => $singlePost,
          'user' => $user
        ];

        return response()->json($response, 200);
    }

    public function apiPutPost(Request $request, $id) {
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['message' => 'Document not found'], 404);
        }
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->category_id = $request->input('category_id');


        $post->image_url = $request->input('image_url');
        $post->save();

        return response()->json(['post' => $post], 200);


    }

    public function apiDeletePost($id) {
        $post = Post::find($id);
        $post->delete();
        return response()->json(['message' => 'Quote deleted'], 200);
    }






}
