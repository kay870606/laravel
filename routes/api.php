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
        'subcategories' => url('/api/subcategories'),
        'activities' => url('/api/activities')
    ];
});

Route::apiResource('categories', 'API\CategoryController');
Route::apiResource('subcategories', 'API\SubcategoryController');
Route::apiResource('activities', 'API\ActivityController');
