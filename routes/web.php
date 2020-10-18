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

/***
 *
 * Auth Portal Routes
 *
 */
 Route::group([], function(){
    Route::get('', function () {return redirect()->route("webapp.home");})->name("redirect.center");

    Route::get('search','SearchController@index')->name("webapp.search");


    /****
     * Pages
     */
    Route::get('home','ClassifiedAdController@index')->name("webapp.home");
    Route::get('ad/detail/{id}','ClassifiedAdController@detail')->name("webapp.detail");
    Route::group(['middleware' => 'auth'], function () {
        Route::get('vehicle/detail/','ClassifiedAdController@submit1')->name("webapp.submit1");
        Route::get('vehicle/features/{id}','ClassifiedAdController@submit2')->name("webapp.submit2");
        Route::get('vehicle/images/{id}','ClassifiedAdController@submit3')->name("webapp.submit3");
        Route::get('vehicle/contact/{id}','ClassifiedAdController@submit4')->name("webapp.submit4");
        Route::get('vehicle/publish/{id}','ClassifiedAdController@submit5')->name("webapp.submit5");
    });
    /***
     * APIS
     */
    Route::post('vehicledetail/add','ClassifiedAdController@addVehicleDetails')->name("webapp.vehicledetail.add");
    Route::post('vehiclefeature/add/{id}','ClassifiedAdController@addvehiclefeature')->name("webapp.vehiclefeature.add");
    Route::post('vehicleimage/add/{id}','ClassifiedAdController@addVehicleImages')->name("webapp.vehicleimage.add");
    Route::post('vehiclecontact/add/{id}','ClassifiedAdController@addVehicleContact')->name("webapp.vehiclecontact.add");
    Route::post('vehicle/publish/{id}','ClassifiedAdController@publishVehicle')->name("webapp.vehicle.publish");
    
});



/***
 * Admin Portal Routes
 */
Auth::routes();
Route::group(['middleware' => 'guest'], function () {
    Route::get('login', 'AdminController@login')->name('loginpage');
    Route::get('register', 'AdminController@register')->name('register');
    Route::get('password/reset', 'AdminController@resetpassword')->name('password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    // Login Routes
});

Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::post('register', 'Auth\RegisterController@register'); 

// Password Reset Routes...
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


Route::group(['prefix' => 'admin'], function () {
    
    Route::get('', function () {return redirect()->route("home");});
    
    
    // Home Redirect Controller
    Route::group(['prefix' => 'profile'], function () {
        Route::get('view/{id}', 'ProfileController@view')->name('profile.view');
        Route::get('edit/{id}', 'ProfileController@edit')->name('profile.edit');
        Route::post('update/{id}', 'ProfileController@update')->name('profile.update');
        Route::post('resetPassword/{id}', 'ProfileController@resetPassword')->name('profile.resetPassword');
        Route::get('account', 'AdminController@changeAccountType')->name('changeAccountType');

    });
    
    Route::get('support', 'SupportController@getList')->name('support');
    
    //  Authenticated Routes
    Route::group(['middleware' => 'is_admin'], function () {
        
        Route::get('home', 'AdminController@home')->name('home');

        
        Route::group(['prefix' => 'car'], function() {

            Route::get('', 'AdminVehicleController@getall')->name('vehicle.getall');

            Route::group(['prefix' => 'manufacturer'], function () {
                Route::get('', 'CarManufacturerController@getall')->name('vehiclebrand.getall');
                Route::get('/create', 'CarManufacturerController@create')->name('vehiclebrand.create');
                Route::get('/edit/{id}', 'CarManufacturerController@edit')->name('vehiclebrand.edit');
                Route::post('/add', 'CarManufacturerController@add')->name('vehiclebrand.add');
                Route::post('/update/{id}', 'CarManufacturerController@update')->name('vehiclebrand.update');
            });

            Route::group(['prefix' => 'model'], function () {
                Route::get('', 'CarModelController@getall')->name('carmodel.getall');
                Route::get('/create', 'CarModelController@create')->name('carmodel.create');
                Route::get('/edit/{id}', 'CarModelController@edit')->name('carmodel.edit');
                Route::post('/add', 'CarModelController@add')->name('carmodel.add');
                Route::post('/update/{id}', 'CarModelController@update')->name('carmodel.update');
            });

            Route::group(['prefix' => 'interiorcolor'], function() {
                Route::get('', 'InteriorColorController@getall')->name('interiorcolor.getall');
                Route::get('create', 'InteriorColorController@create')->name('interiorcolor.create');
                Route::get('edit/{id}', 'InteriorColorController@edit')->name('interiorcolor.edit');
                Route::post('add', 'InteriorColorController@add')->name('interiorcolor.add');
                Route::post('update/{id}', 'InteriorColorController@update')->name('interiorcolor.update');
            });

            Route::group(['prefix' => 'exteriorcolor'], function () {
                Route::get('', 'ExteriorColorController@getall')->name('exteriorcolor.getall');
                Route::get('create', 'ExteriorColorController@create')->name('exteriorcolor.create');
                Route::get('edit/{id}', 'ExteriorColorController@edit')->name('exteriorcolor.edit');
                Route::post('add', 'ExteriorColorController@add')->name('exteriorcolor.add');
                Route::post('update/{id}', 'ExteriorColorController@update')->name('exteriorcolor.update');
            });

            Route::group(['prefix' => 'details'], function () {
                Route::get('', 'AdminVehicleController@getdetails')->name('vehicle.details');
                Route::get('{id}', 'AdminVehicleController@geteditdetails')->name('vehicle.details.edit');
                Route::post('create', 'AdminVehicleController@createdetails')->name('vehicle.details.create');    
            });

            Route::group(['prefix' => 'features'], function () {
                Route::get('{id}', 'AdminVehicleController@getfeatures')->name('vehicle.features');
                Route::post('create/{id}', 'AdminVehicleController@createfeatures')->name('vehicle.features.create');
            });

            Route::group(['prefix' => 'images'], function () {
                Route::get('{id}', 'AdminVehicleController@getimages')->name('vehicle.images');
                Route::post('create/{id}', 'AdminVehicleController@createimages')->name('vehicle.images.create');
            });

            Route::group(['prefix' => 'contact'], function () {
                Route::get('{id}', 'AdminVehicleController@getcontacts')->name('vehicle.contact');
                Route::post('create/{id}', 'AdminVehicleController@createcontacts')->name('vehicle.contact.create');
            });
            Route::group(['prefix' => 'publish'], function () {
                Route::get('{id}', 'AdminVehicleController@getpublish')->name('vehicle.publish');
                Route::post('create/{id}', 'AdminVehicleController@createpublishVehicle')->name('vehicle.publish.create');
            });

            Route::get('vehicle/ad/approve/{id}', 'AdminVehicleController@approveAdStatus')->name('vehicle.approve.status');
            

        });

    });

    
});


Route::group(['middleware' => 'is_buyer', 'prefix' => 'buyer'], function () {
    Route::get('home', 'BuyerController@dashboard')->name('buyer.home');
});


Route::group(['middleware' => 'is_seller', 'prefix' => 'seller'], function () {
    Route::get('home', 'SellerController@dashboard')->name('seller.home');
});