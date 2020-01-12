<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\SubcategoryRequest;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $subcategories = Subcategory::with('category')->orderBy('category_id')->orderBy('order')->get();
        //$subcategories = Subcategory::with('category')->orderBy('category_id')->orderBy('order')->get();
        return view('subcategories.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::orderBy('number')->get();
        return view('subcategories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(SubcategoryRequest $request)
    {
        $validated = $request->validated();
        Subcategory::create($validated);
        return redirect('/subcategories');
    }

    /**
     * Display the specified resource.
     *
     * @param Subcategory $subcategory
     * @return Response
     */
    public function show(Subcategory $subcategory)
    {
        return view('subcategories.show', compact('subcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Subcategory $subcategory
     * @return Response
     */
    public function edit(Subcategory $subcategory)
    {
        $categories = Category::orderBy('number')->get();
        return view('subcategories.edit', compact('subcategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SubcategoryRequest $request
     * @param Subcategory $subcategory
     * @return Response
     */
    public function update(SubcategoryRequest $request, Subcategory $subcategory)
    {
        $validated = $request->validated();
        $subcategory->update($validated);
        return redirect('/subcategories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Subcategory $subcategory
     * @return Response
     * @throws \Exception
     */
    public function destroy(Subcategory $subcategory)
    {
        $subcategory->delete();
        return redirect('/subcategories');
    }
}
