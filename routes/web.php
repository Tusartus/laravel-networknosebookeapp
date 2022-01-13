<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


/*

*/
Route::get('/search','SearchController@search')->name('search');

Route::get('posts','PostController@index')->name('post.index');
Route::get('post/{slug}','PostController@details')->name('post.details');

Route::group(['middleware'=>['auth']], function (){
    //save comment on post 
    Route::post('comment/{post}','CommentController@store')->name('comment.store');
 });

//all users
Route::get('allusers', 'HomeController@allusers')->name('allusers');
Route::get('/searchuser','HomeController@searchuser')->name('searchuser');

 //following unfollowing niet ok  door foutmelding in laravel versie 5.8 met package 
 Route::get('users', 'HomeController@users')->name('users');
Route::get('user/{id}', 'HomeController@user')->name('user.view');
Route::post('follow', 'HomeController@follwUserRequest')->name('follow');


Route::group(['as'=>'author.','prefix'=>'author','namespace'=>'Author','middleware'=>['auth','author']], function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');

      
    Route::resource('post','PostController');
    
      




   Route::get('settings','SettingsController@index')->name('settings');
   Route::put('profile-update','SettingsController@updateProfile')->name('profile.update');
   Route::put('password-update','SettingsController@updatePassword')->name('password.update');


 
   
   
   
   
   
});
