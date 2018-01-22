<?php
use App\Http\Middleware\Admin;
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
    return view('auth/login');
});

//Route::get('/', 'PagesController@index');

Route::get('/home', 'PagesController@home');

//Route::get('/travelgallery', 'PagesController@gallery');

//Route::get('/deals', 'PagesController@deals');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

Route::get('/item', 'PagesController@item');

Route::resource('/home', 'DealsController');

Route::resource('/travelgallery', 'GalleryController');

Route::resource('/deals', 'OfferController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
    return "this page requires that you be logged in and an Admin";
}]);
