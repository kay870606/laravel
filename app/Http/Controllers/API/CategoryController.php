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
        $categories = Category:: with(//由於小分類內部資料有重複，在這裡進行顯示處理
            ['subcategories' => function ($query) {
                $query->distinct('category_id', 'name')->orderBy('category_id');
            }, 'subcategories.products'])
            ->with('beacons')
            ->with('categoryActivities')
            ->orderBy('id')
            ->get();
        return (new BasicCollection($categories))->additional(['api_id' => 1]);//因應學長需要
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
        $category = Category::where('id', $id)
            ->with(['subcategories' => function ($query) {
                $query->distinct('name');
            }, 'subcategories.products'])
            ->with('beacons')
            ->with('categoryActivities')
            ->get();
        return (new BasicCollection($category))->additional(['api_id' => 2]);
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
