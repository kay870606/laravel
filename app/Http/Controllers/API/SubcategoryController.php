<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\SubcategoryCollection;
use App\Product;
use App\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return SubcategoryCollection
     */
    public function index()
    {
        $subcategories = Subcategory::orderBy('id')->get();
        return new SubcategoryCollection($subcategories);
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
        //return request()->input('random-products');
        if(request()->filled('random-products')){
            $randomProducts = request()->input('random-products');

            $subcategory = Subcategory::where('id', $id)
                ->with(['products' => function ($query) use ($id, $randomProducts) {
                    //$query->limit($randomProducts)->inRandomOrder();
                    $collection = Product::where('subcategory_id', $id)->pluck('id');
                    $query->find($collection->random($randomProducts));
                }])
                ->first();
        }
        else {
            $subcategory = Subcategory::where('id', $id)
                ->with('products')
                ->first();
        }
        return $subcategory;
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
