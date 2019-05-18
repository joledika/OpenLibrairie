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

// Auth

Route::group(['namespace' => 'Auth'], function() {
    Route::get('login','LoginController@create')->name('login');
    Route::post('login','LoginController@store');

    Route::get('register', 'RegisterController@create')->name('register');
    Route::post('register', 'RegisterController@store');

    Route::get('logout', 'LoginController@logout')->name('logout');
});


// Route::get('/test', function () {
//     return view('auth/login');
// });

// Route::get('/posts', function () {
//     return view('pages/blogs/posts');
// })->name('home');




Route::get('membres', 'UsersController@index')->name('members_path');
// Route::get('posts', 'PostController@index')->name('posts_path');
// Route::get('posts/{id}', 'PostController@show')->name('post_path');

Route::get('books', 'BookController@index')->name('books_path');
Route::get('books/{categorie}/{id}', 'BookController@show')->name('book_path');
Route::post('books/{categorie}/{id}', 'BookController@store')->name('add_commentary_path');
Route::get('books/get/{categorie}/{id}', 'BookController@get')->name('get_book_path');
Route::put('books/get/{categorie}/{id}', 'BookController@update')->name('put_book_path');;
Route::get('books/edit/{categorie}/{id}', 'BookController@create')->name('edit_book_path');


Route::view('livre', 'pages/livres/show');
Route::view('get', 'pages/livres/get');
Route::view('edit', 'pages/livres/edit');



/****
 *
 * auth
 *
 */


//  Route::group(['namespace' => 'Auth'], function() {
//     Route::get('login', 'LoginController@create')->name('login');
//     Route::get('register', 'RegisterController@create')->name('register');
//  });






 Route::group(['prefix'=>'contact'], function() {

    Route::post('store','GuardContactController@store');

 });





