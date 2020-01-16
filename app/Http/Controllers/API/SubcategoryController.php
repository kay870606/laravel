<?php

namespace App\Http\Controllers\API;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Resources\BasicCollection;
use App\Product;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return SubcategoryCollection
     */
    public function index()
    {
        /*$subcategories = Subcategory::query()
            ->orderBy(function ($query) {
                $query->from('subcategories')->distinct('category_id', 'name');
            })
            ->get();*/

        $subcategories = Subcategory::query()
            ->with('category')
            ->addSelect(['category_number' => Category::select('number')
                ->whereColumn('category_id', 'categories.id')
                ->limit(1)
            ])
            ->distinct('category_id', 'name')
            ->get()->sortBy('order')->sortBy('category_number')->values()->all();

        return (new BasicCollection($subcategories))->additional(['api_id' => 13]);
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
        if (request()->filled('random-products')) {
            $randomProducts = request()->input('random-products');
            $max = Product::where('subcategory_id', $id)->max('id');
            $randomProducts = $randomProducts > $max ? $max : $randomProducts;

            $subcategory = Subcategory::where('id', $id)
                ->with(['products' => function ($query) use ($id, $randomProducts) {
                    //$query->limit($randomProducts)->inRandomOrder();
                    $collection = Product::where('subcategory_id', $id)->pluck('id');
                    $query->find($collection->random($randomProducts));
                }])
                ->first();
        } else {
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
