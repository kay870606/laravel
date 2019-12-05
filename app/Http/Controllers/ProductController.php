<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
use App\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id')->get();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategories = Subcategory::all();

        return view('products.create', compact('subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $path = $request->image->store($this->getImagePath());
        Product::create([
            'subcategory_id' => $request->subcategory_id,
            'ean' => $request->ean,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'specification' => $request->specification,
            'image_path' => $path
        ]);
        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $subcategories = Subcategory::all();

        return view('products.edit', compact('subcategories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        if ($request->hasFile('image')) {
            $path = $request->image->store($this->getImagePath());
            $product->update([
                'subcategory_id' => $request->subcategory_id,
                'ean' => $request->ean,
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'specification' => $request->specification,
                'image_path' => $path
            ]);
        } else {
            $product->update([
                'subcategory_id' => $request->subcategory_id,
                'ean' => $request->ean,
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'specification' => $request->specification,
            ]);
        }

        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->destroy();
        return redirect('/products');
    }

    public function getImagePath()
    {
        return 'products/' . date('Y-m-d');
    }
}
