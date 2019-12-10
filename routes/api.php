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
        'categories_activities_randomFour' => url('/api/categories/activities/randomFour'),
        'subcategories' => url('/api/subcategories'),
        'subcategories_products_randomFour' => url('/api/subcategories/{id}/randomFourProducts'),
        'activities' => url('/api/activities')
    ];
});

Route::apiResource('categories', 'API\CategoryController');
Route::get('categories/activities/randomFour', 'API\CategoryController@randomFourProducts');

Route::apiResource('subcategories', 'API\SubcategoryController');
Route::get('subcategories/{id}/products/randomFour', 'API\SubcategoryController@randomFourProducts');

Route::apiResource('activities', 'API\ActivityController');
