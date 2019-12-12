<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\BasicCollection;
use App\Product;
use Illuminate\Http\Request;

class SubcategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $subcategories
     * @return BasicCollection
     */
    public function index($subcategories)
    {
        $products = Product::query()->where('subcategory_id', $subcategories);

        if (request()->has('random')) {
            $random = request()->input('random');
            $products->inRandomOrder()->limit($random);
        }

        $products = $products->get();
        //$products = Product::where('subcategory_id', $subcategories)->get();
        return new BasicCollection($products);
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
