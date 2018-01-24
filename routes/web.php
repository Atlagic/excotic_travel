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

Route::get('/home', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

Route::get('/item', 'PagesController@item');

Route::resource('/home', 'DealsController');

Route::resource('/travelgallery', 'GalleryController');

Route::get('/deals', 'OfferController@index');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});
Route::get('/home/{$id}', 'DealsController@show');
//Route::get('/orderByAsc', 'OfferController@orderByAsc');