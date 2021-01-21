<?php

use Illuminate\Support\Facades\Route;

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
// Route::get('auth/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm');
// Route::post('auth/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm');
// Route::get('auth/logout', 'App\Http\Controllers\Auth\LoginController@');


// if ($options['register'] ?? true) {
//     Route::get('register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
//     Route::post('register', 'App\Http\Controllers\Auth\RegisterController@register');
// }

// Route::group([],function (){
//     Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
//     Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');
//     Route::post('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

//     if ($options['register'] ?? true) {
//         Route::get('register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
//         Route::post('register', 'App\Http\Controllers\Auth\RegisterController@register');
//     }

//     // if ($options['reset'] ?? true) {
//     //     Route::resetPassword();
//     // }

//     if ($options['verify'] ?? false) {
//         Route::emailVerification();
//     }
// });
Auth::routes();
Route::get('/home', 'HomeController@index');



Route::get('blog/{slug}', ['as'=>'blog.single','uses'=>'App\Http\Controllers\BlogController@getSingle'])->where('slug','[\w,\d\-\_]+');
Route::get('blog',['uses'=>'App\Http\Controllers\BlogController@getIndex','as'=>'blog.index']);
Route::get('contact', 'App\Http\Controllers\PagesController@getContact');
Route::get('about', 'App\Http\Controllers\PagesController@getAbout');
Route::get('/','App\Http\Controllers\PagesController@getIndex' );
Route::resource('posts','App\Http\Controllers\PostController');
