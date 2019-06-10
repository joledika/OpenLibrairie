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
Route::view('adm','administration/layout/master');
Route::view('adm/membres','administration/membres/index');
Route::view('adm/livres','administration/livres/index');
// Route::view('adm/mail','administration/mails/show');
// Route::view('adm/profil','administration/profils/show');
// Route::view('adm/dashboard','administration/welcome');

/***************************************************************
 ***********Route pour l'espace administration*****************
 ***************************************************************/
Route::group(['prefix'=>'adm','middleware'=>'admin'],function(){

  // Route::get('contacts','GuardContactController@index')->name('guard_contact_path');
  Route::get('contacts','GuardContactController@index')->name('admin_guard_contact_path');
  Route::get('contact/{id}/show','GuardContactController@show')->name('admin_show_guard_contact_path');
  Route::delete('contact/{id}/delete','GuardContactController@destroy')->name('admin_delete_guard_contact_path');
  Route::get('contact/response/{email}/{name}/mail','GuardContactController@responseMail')->name('admin_response_guard_contact_path');
  Route::view('profil', 'administration/profils/show')->name('admin_profile_path');
  Route::get('home', 'AdminController@index')->name('admin_home_path');
  Route::get('members', 'AdminController@members')->name('admin_members_path');
  Route::get('livres', 'AdminController@books')->name('admin_books_path');
  Route::get('account', 'AdminAccountController@index')->name('admin_account_path');
  Route::get('account/{user}/change', 'AdminAccountController@change')->name('admin_change_account_type');
  Route::delete('account/{user}/delete', 'AdminAccountController@destroy')->name('admin_delete_account_path');
});


Route::get('/', function () {
    return view('welcome');
})->name('home_path');

Route::get('contact', function () {
    return view('home/contact');
})->name('contact_path');

/***************************************************************
*************Route pour la connexion et inscription************
****************************************************************/
Route::group(['namespace' => 'Auth'], function() {
    Route::get('login','LoginController@create')->name('login')->middleware('guest');
    Route::post('login','LoginController@store');

    Route::get('register', 'RegisterController@create')->name('register')->middleware('guest');
    Route::post('register', 'RegisterController@store');

    Route::get('logout', 'LoginController@logout')->name('logout')->middleware('auth');
});


// Route::get('/test', function () {
//     return view('auth/login');
// });
// Route::view('profil','pages/membres/show');
// Route::get('/posts', function () {
//     return view('pages/blogs/posts');
// })->name('home');


Route::group(['prefix'=>'members','middleware'=>'auth'],function(){

  Route::get('', 'UsersController@index')->name('members_path');


});
// Route::get('posts', 'PostController@index')->name('posts_path');
// Route::get('posts/{id}', 'PostController@show')->name('post_path');

/***************************************************************
**********************Route pour les livres*********************
****************************************************************/

Route::group(['prefix'=>'book','middleware'=>'auth'],function(){

  Route::get('index', 'BookController@index')->name('books_path');
  Route::get('index/{category}', 'BookController@index')->name('books_filter_path');
  Route::get('{categorie}/{slug}', 'BookController@show')->name('book_path');
  Route::post('{categorie}/{slug}', 'CommentaryController@store')->name('add_commentary_path');
  Route::get('{categorie}/{slug}/comment/{id}/edit', 'CommentaryController@edit')->name('edit_commentary_path');
  Route::put('{categorie}/{slug}/comment/{id}/update', 'CommentaryController@update')->name('update_commentary_path');
  Route::delete('{categorie}/{slug}/comment/{id}/delete', 'CommentaryController@destroy')->name('delete_commentary_path');
  Route::get('get/{categorie}/{slug}', 'BookController@get')->name('get_book_path');

  Route::put('down/{categorie}/{slug}', 'DownloadedController@update')->name('download_book_path');

  Route::put('get/{categorie}/{slug}', 'BookController@update')->name('put_book_path');;
  Route::get('edit/{categorie}/{slug}', 'BookController@create')->name('edit_book_path');
  Route::get('add','BookController@add')->name('add_book_path');
  Route::post('add','BookController@store')->name('store_book_path');
  Route::delete('{id}/delete','BookController@destroy')->name('delete_book_path');

});


// Route::view('livre', 'pages/livres/show');
// Route::view('get', 'pages/livres/get');
// Route::view('edit', 'pages/livres/edit');
// Route::view('test', 'pages/admin/template/default');
// Route::view('message', 'pages/admin/messages/index');
// Route::view('admin/membres', 'pages/admin/membres/index');
// Route::view('admin/dashboard', 'pages/admin/dashboard');
// Route::view('msg', 'pages/contacts/index');
Route::get('msg', 'MessageController@index')->name('message_path');
Route::get('dashboard', 'DashboardController@index')->name('dashboard_path');


// /***************************************************************
//  ***********Route pour l'espace administration*****************
//  ***************************************************************/
// Route::group(['prefix'=>'admin','middleware'=>'admin'],function(){
//
//   Route::get('contacts','GuardContactController@index')->name('guard_contact_path');
//   Route::get('contact/{id}/show','GuardContactController@show')->name('show_guard_contact_path');
//   Route::get('my/profile/{id}', 'AdminController@profile')->name('admin_profile_path');
//   Route::get('home', 'AdminController@index')->name('admin_home_path');
//   Route::get('members', 'AdminController@members')->name('admin_members_path');
//
// });

/***************************************************************
********************Route pour les catégories*******************
****************************************************************/

Route::group(['prefix' => 'category','middleware'=>'auth'], function() {

    Route::get('books','CategoryController@index')->name('category');

    Route::group(['middleware'=>'admin'],function(){

      Route::get('add','CategoryController@create')->name('add_category_path');
      Route::post('store','CategoryController@store')->name('store_category_path');
      Route::get('edit/{slug}','CategoryController@edit')->name('edit_category_path');
      Route::put('edit/{slug}','CategoryController@update')->name('update_category_path');
      Route::delete('delete/{slug}','CategoryController@destroy')->name('delete_category_path');

    });



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

 /***************************************************************
 **********************Route pour mon profil*********************
 ****************************************************************/
Route::group(['prefix'=>'profil','middleware'=>'auth'],function(){

  Route::get('{id}', 'UsersController@show')->name('profile_path');
  Route::get('create/{id}', 'UsersController@create')->name('edit_profile_path');

  Route::put('edit/{id}', 'UsersController@update')->name('put_profile_path');
});
