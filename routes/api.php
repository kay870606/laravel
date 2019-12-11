<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return [
        'categories' => url('/api/categories'),
        'category_activities' => url('/api/category-activities'),
        'subcategories' => url('/api/subcategories'),
        'activities' => url('/api/activities')
    ];
});


/*Route::prefix('categories')->group(function () {
    Route::apiResource('/', 'API\CategoryController');
    //Route::resource('/activities', 'API\CategoryActivityController');

    //Route::resource('/beacons', 'CategoryBeaconController');
    //Route::get('/beacons', 'CategoryBeaconController@index');
    //Route::get('/beacons/{categoryBeacon}', 'CategoryBeaconController@show');
});*/

Route::apiResource('categories', 'API\CategoryController');
Route::apiResource('category-activities', 'API\CategoryActivityController');
Route::apiResource('subcategories', 'API\SubcategoryController');
Route::apiResource('activities', 'API\ActivityController');
