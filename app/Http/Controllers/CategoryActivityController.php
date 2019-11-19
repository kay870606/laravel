<?php

namespace App\Http\Controllers;

use App\CategoryActivity;
use Illuminate\Http\Request;

class CategoryActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriesActivities = CategoryActivity::all();

        return view('category-activities.index', compact('categoriesActivities'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoryActivity  $categoryActivity
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryActivity $categoryActivity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryActivity  $categoryActivity
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryActivity $categoryActivity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryActivity  $categoryActivity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryActivity $categoryActivity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryActivity  $categoryActivity
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryActivity $categoryActivity)
    {
        //
    }
}
