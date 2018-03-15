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
Route::get('pagenotfound', ['as' => 'notfound', 'uses' => 'PagesController@pagenotfound']);
//------------------ PAGES --------------------------//
Route::get('/home', 'OfferController@index');

Route::get('/home/{id}', 'OfferController@show')->where(['id' => '[0-9]+']);

Route::get('/deals', 'DealsController@index');

Route::get('/deals/{id}', 'DealsController@show')->where(['id' => '[0-9]+']);

Route::get('/deals/sort/{value}', 'DealsController@sort')->where(['value' => '[a-z]+']);

Route::get('/deals/search/{value}', 'DealsController@search')->where(['value' => '[a-z]+']);

Route::get('/travelgallery', 'GalleryController@index');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

Route::post('contact', 'ContactController@sendEmail')->name('sendEmail');

Route::post('/store', 'DealsController@store')->name('store');

Route::post('/storecomment', 'OfferController@storeComment')->name('storecomment');
//------------------------------------------------//


Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    //------------------------------------ ADMIN PAGES -------------------------------------//
    Route::get('/', 'AdminController@index')->name('admin.dashboard');

    Route::get('/dealsadmin', 'AdminController@dealsadmin')->name('admin.dealsadmin');

    Route::get('/galleriesadmin', 'AdminController@galleriesadmin')->name('admin.galleriesadmin');

    Route::get('/pagesadmin', 'AdminController@pagesadmin')->name('admin.pagesadmin');

    Route::get('/reservationsadmin', 'AdminController@reservationsadmin')->name('admin.reservationsadmin');

    Route::get('/usersadmin', 'AdminController@usersadmin')->name('admin.usersadmin');

    Route::get('/admins', 'AdminController@admins')->name('admin.admins');

    Route::get('/commentsadmin', 'AdminController@commentsadmin')->name('admin.commentsadmin');
    //----------------------------------------------------------------------------------------//

        Route::get('/create/createdeal', 'AdminController@createDeal')->name('admin.createdeal');
        Route::get('/create/creategalleries', 'AdminController@createGalleries')->name('admin.creategalleries');
        Route::get('/create/createpages', 'AdminController@createPages')->name('admin.createpages');
        Route::get('/create/createreservations', 'AdminController@createReservations')->name('admin.createreservations');
        Route::get('/create/createusers', 'AdminController@createUsers')->name('admin.createusers');
        Route::get('/create/createadmins', 'AdminController@createAdmins')->name('admin.createadmins');
        Route::get('/create/createcomments', 'AdminController@createComments')->name('admin.createcomments');

        Route::post('/storedeal', 'AdminController@storeDeal')->name('admin.storedeal');
        Route::post('/storegalleries', 'AdminController@storeGalleries')->name('admin.storegalleries');
        Route::post('/storepages', 'AdminController@storePages')->name('admin.storepages');
        Route::post('/storereservations', 'AdminController@storeReservations')->name('admin.storereservations');
        Route::post('/storeusers', 'AdminController@storeUsers')->name('admin.storeusers');
        Route::post('/storeadmins', 'AdminController@storeAdmins')->name('admin.storeadmins');
        Route::post('/storecomments', 'AdminController@storeComments')->name('admin.storecomments');

        Route::get('/edit/dealsadmin/{id}/editdeal', 'AdminController@editDeal')->name('admin.editdeal');
        Route::get('/edit/galleriesadmin/{id}/editgalleries', 'AdminController@editGalleries')->name('admin.editgalleries');
        Route::get('/edit/pagesadmin/{id}/editpages', 'AdminController@editPages')->name('admin.editpages');
        Route::get('/edit/reservationsadmin/{id}/editreservations', 'AdminController@editReservations')->name('admin.editreservations');
        Route::get('/edit/usersadmin/{id}/editusers', 'AdminController@editUsers')->name('admin.editusers');
        Route::get('/edit/admins/{id}/editadmins', 'AdminController@editAdmins')->name('admin.editadmins');
        Route::get('/edit/commentsadmin/{id}/editcomments', 'AdminController@editComments')->name('admin.editcomments');

        Route::put('/updatedeal/{id}', 'AdminController@updateDeal')->name('admin.updatedeal');
        Route::put('/updategalleries/{id}', 'AdminController@updateGalleries')->name('admin.updategalleries');
        Route::put('/updatepages/{id}', 'AdminController@updatePages')->name('admin.updatepages');
        Route::put('/updatereservations/{id}', 'AdminController@updateReservations')->name('admin.updatereservations');
        Route::put('/updateusers/{id}', 'AdminController@updateUsers')->name('admin.updateusers');
        Route::put('/updateadmins/{id}', 'AdminController@updateAdmins')->name('admin.updateadmins');
        Route::put('/updatecomments/{id}', 'AdminController@updateComments')->name('admin.updatecomments');

        Route::delete('/dealsadmin/{id}', 'AdminController@destroyDeal')->name('admin.dealsadmin');
        Route::delete('/galleriesadmin/{id}', 'AdminController@destroyGalleries')->name('admin.galleriesadmin');
        Route::delete('/pagesadmin/{id}', 'AdminController@destroyPages')->name('admin.pagesadmin');
        Route::delete('/reservationsadmin/{id}', 'AdminController@destroyReservations')->name('admin.reservationsadmin');
        Route::delete('/usersadmin/{id}', 'AdminController@destroyUsers')->name('admin.usersadmin');
        Route::delete('/admins/{id}', 'AdminController@destroyAdmins')->name('admin.admins');
        Route::delete('/commentsadmin/{id}', 'AdminController@destroyComment')->name('admin.commentsadmin');
});
