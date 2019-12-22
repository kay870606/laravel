<?php

namespace App\Http\Controllers\API;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Resources\BasicCollection;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return BasicCollection
     */
    public function index()
    {
        $categories = Category::orderBy('id')->with('beacons')->get();
        return new BasicCollection($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return void
     */
    public function show($id)
    {
        //$category = Category::where('id', $id)->with('subcategories')->with('beacons')->first();
        $category = Category::where('id', $id)
            ->with(['subcategories' => function ($query) {
                $query->distinct('name');
            }, 'subcategories.products'])
            ->with('beacons')
            ->with('categoryActivities')
            ->first();
        return $category;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
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
