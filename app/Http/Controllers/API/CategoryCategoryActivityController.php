<?php

namespace App\Http\Controllers\API;

use App\CategoryActivity;
use App\Http\Controllers\Controller;
use App\Http\Resources\BasicCollection;
use Illuminate\Http\Request;

class CategoryCategoryActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $categories
     * @return BasicCollection
     */
    public function index($categories)
    {
        $categoryActivities = CategoryActivity::query()->where('category_id', $categories);

        if (request()->has('random')) {
            $random = request()->input('random');
            $categoryActivities->inRandomOrder()->limit($random);
        }

        $categoryActivities = $categoryActivities->get();
        return new BasicCollection($categoryActivities);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
