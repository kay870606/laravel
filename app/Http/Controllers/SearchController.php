<?php

namespace App\Http\Controllers;

use App\CategoryActivity;
use App\Keyword;
use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::query();
        $categoryActivities = CategoryActivity::query();

        if (request()->has('name')) {
            $name = request()->input('name');

            /*$products->where('name', 'like', "%" . $name . "%");
            $categoryActivities->where('name', 'like', "%" . $name . "%");

            $products = $products->get();
            $categoryActivities = $categoryActivities->get();*/

            $name = Keyword::query()
                ->where('name', $name)
                ->with('keywordMappings');

            $name = $name->get();

            return $name;
            //return compact('products', 'categoryActivities');
        } else
            return '空';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
