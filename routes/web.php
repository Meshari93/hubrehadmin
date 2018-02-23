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

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/display/{id}', 'WelcomeController@display')->name('display');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['role:admin']], function () {

  Route::get('admin/dashboard', 'Admin\UserController@dashboard');
  Route::resource('admin/permission', 'Admin\\PermissionController');
  Route::resource('admin/role', 'Admin\\RoleController');
  Route::resource('admin/user', 'Admin\\UserController');
  Route::resource('admin/user', 'Admin\\UserController');

});
Route::resource('property', 'PropertyController');
Route::get('property/{section_id}/createsection', 'PropertyController@createsection');

Route::resource('section', 'SectionController');

Route::resource('serves', 'ServesController');

//Ounre Controller
Route::post('addRole', 'Admin\\UserController@addRole')->name('addOner');
// Route::get('property/{section_id}/createsection', 'PropertyController@createsection');
// Favorites Controller
Route::post('/addfavorites', 'FavoritesController@store')->name('addfavorites');
// Comment Controller
Route::post('/addComment', 'CommentController@store')->name('addComment');
// Rating Controller
Route::post('/addRating', 'RatingController@store')->name('addRating');
