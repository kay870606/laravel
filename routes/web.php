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

Route::resource('categories', 'CategoryController');
Route::resource('subcategories', 'SubcategoryController');
Route::resource('beacons', 'BeaconController');

//Route::get('categories/{category}/beacons', 'CategoryBeaconController@index');
Route::resource('categoriesBeacons', 'CategoryBeaconController');

Route::get('/test', function () {
    //Storage::put('file.txt', 'Contents');
    //return Storage::get('file.txt');
    /*$content= Storage::get('8.png');
    return response($content, 200, [
        'Content-Type' => 'image/png',
    ]);*/
});
