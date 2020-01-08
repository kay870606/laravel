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
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
    Route::resource('categories', 'CategoryController');
    Route::resource('subcategories', 'SubcategoryController');
    Route::resource('beacons', 'BeaconController');
    Route::resource('activities', 'ActivityController');
    Route::resource('keywords', 'KeywordController');
    Route::resource('keywords.mappings', 'KeywordMappingController');
    Route::resource('products', 'ProductController');
    Route::resource('category-beacons', 'CategoryBeaconController');
    Route::resource('category-activities', 'CategoryActivityController');
});

Route::resource('qr-code', 'QRCodeController');
Route::get('search', 'SearchController@index');

//Route::get('categories', 'CategoryController@index');
//Route::get('categories_beacons/{category_beacon}', 'CategoryBeaconController@show');
//Route::resource('category_beacon', 'CategoryBeaconController');

/*Route::prefix('categories')->group(function () {
    Route::resource('/', 'CategoryController');
    //Route::resource('/beacons', 'CategoryBeaconController');
    Route::get('/beacons', 'CategoryBeaconController@index');
    Route::get('/beacons/{categoryBeacon}', 'CategoryBeaconController@show');
});*/

Route::get('/test', function () {
    //Storage::put('file.txt', 'Contents');
    //return Storage::get('file.txt');
    /*$content= Storage::get('8.png');
    return response($content, 200, [
        'Content-Type' => 'image/png',
    ]);*/
});
