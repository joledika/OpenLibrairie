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


/***************************************************************
 ***********Route pour l'espace administration*****************
 ***************************************************************/
Route::group(['prefix'=>'adm','middleware'=>'admin'],function(){


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

/*Route pour le code source*/
Route::get('source',function(){
  return view('home/source');
})->name('source_path');

/***************************************************************
*************Route pour la connexion et inscription************
****************************************************************/
Route::group(['namespace' => 'Auth'], function() {
    Route::get('login','LoginController@create')->name('login')->middleware('guest');
    Route::post('login','LoginController@store');

    Route::get('register', 'RegisterController@create')->name('register')->middleware('guest');
    Route::post('register', 'RegisterController@store');
    Route::get('confirmation/{user}/{token}', 'ConfirmationsController@store')->name('confirmation');

    Route::get('logout', 'LoginController@logout')->name('logout')->middleware('auth');

    //modification de mot de passe
    Route::get('reset/pass','ForgotPasswordController@index')->name('forgot_password');
    Route::post('reset','ForgotPasswordController@check')->name('check_user');
    Route::get('reset/{user}/{token}','ForgotPasswordController@newPass')->name('new_password_create');
    Route::post('reset/{user}','ForgotPasswordController@editPass')->name('new_password');
});




Route::group(['prefix'=>'members','middleware'=>'confirmed'],function(){

  Route::get('', 'UsersController@index')->name('members_path');


});

/***************************************************************
**********************Route pour les livres*********************
****************************************************************/

Route::group(['prefix'=>'book','middleware'=>'confirmed'],function(){

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

  Route::get('mes/books/{id}', 'BookController@myBook')->name('get_my_book_path');

});



Route::get('msg', 'MessageController@index')->name('message_path');
Route::get('dashboard', 'DashboardController@index')->name('dashboard_path')->middleware('confirmed');




/***************************************************************
********************Route pour les catégories*******************
****************************************************************/

Route::group(['prefix' => 'category','middleware'=>'confirmed'], function() {

    Route::get('books','CategoryController@index')->name('category');

    Route::group([],function(){

      Route::get('add','CategoryController@create')->name('add_category_path');
      Route::post('store','CategoryController@store')->name('store_category_path');
      Route::get('edit/{slug}','CategoryController@edit')->name('edit_category_path')->middleware('admin');
      Route::put('edit/{slug}','CategoryController@update')->name('update_category_path');
      Route::delete('delete/{slug}','CategoryController@destroy')->name('delete_category_path')->middleware('admin');

    });



});


/****
 *
 * auth
 *
 */









 Route::group(['prefix'=>'contact'], function() {

    Route::post('store','GuardContactController@store');

 });

 /***************************************************************
 **********************Route pour mon profil*********************
 ****************************************************************/
Route::group(['prefix'=>'profil','middleware'=>['auth','confirmed']],function(){

  Route::get('{id}', 'UsersController@show')->name('profile_path');
  Route::get('create/{id}', 'UsersController@create')->name('edit_profile_path');

  Route::put('edit/{id}', 'UsersController@update')->name('put_profile_path');
});
