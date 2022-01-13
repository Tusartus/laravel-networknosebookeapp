<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
 

    public function allusers()
    {
        $users = User::get();
        return view('allusers', compact('users'));
    }

    //vind user
    public function searchuser(Request $request)
    {
        $query = $request->input('query');
        //$posts = Post::where('title','LIKE',"%$query%")->approved()->published()->get();
        $users = User::where('name','LIKE',"%$query%")->orwhere('email','LIKE',"%$query%")->get();
        return view('usersearch',compact('users','query'));
    }


    /* ik heb foutmelding  met laravel  versie 5.8 :  https://github.com/overtrue/laravel-follow*/
    public function users()
    {
        $users = User::get();
        return view('users', compact('users'));
    }

    public function user($id)
    {
        $user = User::find($id);
        return view('usersView', compact('user'));
    }

    public function follwUserRequest(Request $request){


        $user = User::find($request->user_id);
        $response = auth()->user()->toggleFollow($user);


        return response()->json(['success'=>$response]);
    }


}
