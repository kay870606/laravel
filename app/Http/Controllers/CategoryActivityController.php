<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryActivity;
use App\Http\Requests\CategoryActivityRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categoryActivities = CategoryActivity::orderBy('category_id')->get();

        return view('category-activities.index', compact('categoryActivities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('category-activities.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(CategoryActivityRequest $request)
    {
        $path = $request->image->store($this->getImagePath());
        CategoryActivity::create(
            ['category_id' => $request->category_id, 'name' => $request->name, 'price' => $request->price, 'description' => $request->description, 'image_path' => $path]
        );
        return redirect('/category-activities');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\CategoryActivity $categoryActivity
     * @return Response
     */
    public function show(CategoryActivity $categoryActivity)
    {
        return view('category-activities.show', compact('categoryActivity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\CategoryActivity $categoryActivity
     * @return Response
     */
    public function edit(CategoryActivity $categoryActivity)
    {
        $categories = Category::all();

        return view('category-activities.edit', compact('categoryActivity', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\CategoryActivity $categoryActivity
     * @return Response
     */
    public function update(CategoryActivityRequest $request, CategoryActivity $categoryActivity)
    {
        if ($request->hasFile('image')) {
            $path = $request->image->store($this->getImagePath());
            $categoryActivity->update(
                ['category_id' => $request->category_id, 'name' => $request->name, 'price' => $request->price, 'description' => $request->description, 'image_path' => $path]
            );
        } else {
            $categoryActivity->update(
                ['category_id' => $request->category_id, 'name' => $request->name, 'price' => $request->price, 'description' => $request->description]
            );
        }

        return redirect('/category-activities');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\CategoryActivity $categoryActivity
     * @return Response
     * @throws \Exception
     */
    public function destroy(CategoryActivity $categoryActivity)
    {
        $categoryActivity->delete();
        return redirect('/category-activities');
    }

    public function getImagePath()
    {
        return 'category-activities/' . date('Y-m-d');
    }
}
