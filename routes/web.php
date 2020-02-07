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

// Route::get('/alert', function () {
//     return view('alert');
// });
Route::get('/','frontend\PageviewController@index');
Route::get('post/{id}','frontend\PageviewController@view');
Route::get('/admin',function () {
    return view('backend.layouts.master');
});
Route::get('about',function(){
    return view('frontend.about');
});
Route::get('currency',function(){
    return view('frontend.currencyEx');
});
//route_for_post&persona
Route::group(['prefix'=>'admin','namespace'=>'backend','middleware'=>'auth'],function(){
Route::get('post','PostsController@index');
Route::get('post/create','PostsController@create');
Route::post('post/create','PostsController@store');
Route::get('post/{id}/edit','PostsController@edit');
Route::post('post/{id}/update','PostsController@update');
Route::get('post/{id}/delete','PostsController@destroy');
Route::get('profile','ProfileController@index');
Route::get('profile/edit','ProfileController@edit');
Route::post('profile/edit','ProfileController@update');
});

//auth_route
Route::get('register','auth\RegisterController@show');
Route::post('register','auth\RegisterController@register');
Route::get('logout','auth\LoginController@logout');
Route::get('login','auth\LoginController@show');
Route::post('login','auth\LoginController@login');