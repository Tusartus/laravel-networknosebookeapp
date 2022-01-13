<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\User;
use Illuminate\Support\Facades\Auth;


//use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    //

    public function index()
    {
 
          
        
        $posts = Post::latest()->paginate(3);
        return view('posts',compact('posts'));
    }
    
    public function details($slug)
    {
       
       $post = Post::where('slug',$slug)->first();

       $userprofile = User::find(Auth::id());
     
 
       
 
        
        $randomposts = Post::take(3)->inRandomOrder()->get();
        return view('post',compact('post','randomposts', 'userprofile'));
 
    }

    public function ajaxRequest(Request $request){


        $post = Post::find($request->id);
        $response = auth()->user()->toggleLike($post);


        return response()->json(['success'=>$response]);
    }



    


}
