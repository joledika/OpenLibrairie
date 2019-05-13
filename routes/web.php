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
})->name('home_path');


Route::get('/test', function () {
    return view('auth/login');
});





Route::get('membres', 'UsersController@index')->name('members_path');
Route::get('posts', 'PostController@index')->name('posts_path');
Route::get('posts/{id}', 'PostController@show')->name('post_path');





/****
 *
 * auth
 *
 */


 Route::group(['namespace' => 'Auth'], function() {
    Route::get('login', 'LoginController@create')->name('login');
    Route::get('register', 'RegisterController@create')->name('register');
 });
