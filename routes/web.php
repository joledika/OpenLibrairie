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

Route::get('contact', function () {
    return view('home/contact');
})->name('contact_path');

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
// Route::view('profil','pages/membres/show');
// Route::get('/posts', function () {
//     return view('pages/blogs/posts');
// })->name('home');




Route::get('membres', 'UsersController@index')->name('members_path');
// Route::get('posts', 'PostController@index')->name('posts_path');
// Route::get('posts/{id}', 'PostController@show')->name('post_path');

Route::get('books', 'BookController@index')->name('books_path');
Route::get('books/{categorie}/{slug}', 'BookController@show')->name('book_path');
Route::post('books/{categorie}/{slug}', 'CommentaryController@store')->name('add_commentary_path');
Route::get('books/get/{categorie}/{slug}', 'BookController@get')->name('get_book_path');
Route::put('books/get/{categorie}/{slug}', 'BookController@update')->name('put_book_path');;
Route::get('books/edit/{categorie}/{slug}', 'BookController@create')->name('edit_book_path');
Route::get('books/add','BookController@add')->name('add_book_path');
Route::post('books/add','BookController@store');
Route::delete('books/{id}/delete','BookController@destroy')->name('delete_book_path');

Route::view('livre', 'pages/livres/show');
Route::view('get', 'pages/livres/get');
Route::view('edit', 'pages/livres/edit');
Route::view('test', 'pages/admin/template/default');
Route::view('message', 'pages/admin/messages/index');
Route::view('admin/membres', 'pages/admin/membres/index');


/*********Route pour l'espace administration***************/
Route::group(['prefix'=>'admin'],function(){

  Route::get('contacts','GuardContactController@index')->name('guard_contact_path');
  Route::get('contact/{id}/show','GuardContactController@show')->name('show_guard_contact_path');
  Route::get('profil/{id}', 'UsersController@profile')->name('admin_profile_path');

});



Route::group(['prefix' => 'category'], function() {
    Route::get('books','CategoryController@index')->name('category');
    Route::get('add','CategoryController@create')->name('add_category_path');
    Route::post('store','CategoryController@store')->name('store_category_path');
    Route::get('edit/{slug}','CategoryController@edit')->name('edit_category_path');
    Route::put('edit/{slug}','CategoryController@update')->name('update_category_path');
    Route::delete('delete/{slug}','CategoryController@destroy')->name('delete_category_path');



});


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



Route::get('profil/{id}', 'UsersController@show')->name('profile_path');
Route::get('profil/create/{id}', 'UsersController@create')->name('edit_profile_path');
Route::put('profil/edit/{id}', 'UsersController@update')->name('put_profile_path');
