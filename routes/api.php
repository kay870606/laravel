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

Route::get('/', function () {//api目錄，跳轉至其它api頁面
    return [
        'categories' => url('/api/categories'),
        'category_activities' => url('/api/category-activities'),
        'subcategories' => url('/api/subcategories'),
        'activities' => url('/api/activities'),
        'beacons' => url('/api/beacons'),
        'users' => url('/api/users'),
        'orders' => url('/api/orders'),
        'position-records' => url('/api/position-records'),
        'subcategory-counters' => url('/api/subcategory-counters'),
        'products'=>url('/api/products'),
        'independentBeacon' => url('/api/independent-beacons/latest'),
        //'others' => url('/api/others'),
    ];
});

//以下為各個api的頁面

Route::apiResource('categories', 'API\CategoryController');
Route::apiResource('category-activities', 'API\CategoryActivityController');
Route::apiResource('subcategories', 'API\SubcategoryController');
Route::apiResource('activities', 'API\ActivityController');
Route::apiResource('beacons', 'API\BeaconController');
Route::apiResource('users', 'API\UserController');
Route::apiResource('orders', 'API\OrderController');
Route::apiResource('position-records', 'API\PositionRecordController');
Route::apiResource('subcategory-counters', 'API\SubcategoryCounterController');
Route::apiResource('products', 'API\ProductController');


//以下為測試用

/*Route::get('others', 'API\OtherController@index');

Route::get('independent-beacons', 'API\IndependentBeaconController@index');
Route::get('independent-beacons/latest', 'API\IndependentBeaconController@latest');
Route::post('independent-beacons', 'API\IndependentBeaconController@store');*/


/*Route::prefix('categories')->group(function () {
    Route::apiResource('/', 'API\CategoryController');
    //Route::resource('/activities', 'API\CategoryActivityController');

    //Route::resource('/beacons', 'CategoryBeaconController');
    //Route::get('/beacons', 'CategoryBeaconController@index');
    //Route::get('/beacons/{categoryBeacon}', 'CategoryBeaconController@show');
});*/
