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
        'activities' => url('/api/activities'),
        'beacons' => url('/api/beacons'),
        'users' => url('/api/users'),
        'orders' => url('/api/orders'),
        'position-records' => url('/api/position-records'),
        'subcategory-counters' => url('/api/subcategory-counters'),

        'others' => url('/api/others'),

        'category_category_activities' => url('/api/categories/{category}/category-activities'),
        'subcategory_products' => url('/api/subcategories/{subcategories}/products'),
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
Route::apiResource('beacons', 'API\BeaconController');
Route::apiResource('users', 'API\UserController');
Route::apiResource('orders', 'API\OrderController');
Route::apiResource('position-records', 'API\PositionRecordController');
Route::apiResource('subcategory-counters', 'API\PositionRecordController');

Route::apiResource('categories.category-activities', 'API\CategoryCategoryActivityController');
Route::apiResource('subcategories.products', 'API\SubcategoryProductController');

Route::get('others', 'API\OtherController@index');
