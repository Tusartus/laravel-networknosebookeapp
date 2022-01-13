<?php

namespace App\Http\Controllers\Author;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Post;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Auth::user()->posts()->latest()->get();
        return view('author.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('author.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        
        $this->validate($request,[
            'title' => 'required',
           
            'body' => 'required',
        ]);
        $image = $request->file('image');
        $slug = Str::slug($request->title);
    
        $post = new Post();
        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->slug = $slug;
        
        $post->body = $request->body;
       
        $post->save();
  
       
        
        return redirect()->route('author.post.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
            //protect posted post from one user
            if ($post->user_id != Auth::id())
            {
                
                return redirect()->back();
            }
            return view('author.post.show',compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        if ($post->user_id != Auth::id())
        {
            
            return redirect()->back();
        }
       
        return view('author.post.edit',compact('post'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Post $post)
    {
        //
        if ($post->user_id != Auth::id())
           {
               
               return redirect()->back();
           }
           $this->validate($request,[
               'title' => 'required',
              
               'body' => 'required',
           ]);
          
           $slug = Str::slug($request->title);
          
   
           $post->user_id = Auth::id();
           $post->title = $request->title;
           $post->slug = $slug;
           
           $post->body = $request->body;
          
           
           $post->save();
   
         
           return redirect()->route('author.post.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // bechermen user  post 
        if ($post->user_id != Auth::id())
        {
            
            return redirect()->back();
        }
     
        $post->delete();
        
        return redirect()->back();
    }


    
}
