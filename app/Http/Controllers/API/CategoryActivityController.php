<?php

namespace App\Http\Controllers\API;

use App\CategoryActivity;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryActivityCollection;
use Illuminate\Http\Request;

class CategoryActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return CategoryActivityCollection
     */
    public function index()
    {
        if (request()->filled('random')) {
            $random = request()->input('random');
            $max = CategoryActivity::max('id');
            $random = $random > $max ? $max : $random;

            $categoryActivities = CategoryActivity::all()->random($random);
        } else {
            $categoryActivities = CategoryActivity::all();
        }
        return new CategoryActivityCollection($categoryActivities);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
