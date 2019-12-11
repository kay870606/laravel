<?php

namespace App\Http\Controllers\API;

use App\CategoryActivity;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryActivityCollection;
use Illuminate\Http\Request;

class CategoryActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return CategoryActivityCollection
     */
    public function index()
    {
        $categories = CategoryActivity::orderBy('id')->get();
        return new CategoryActivityCollection($categories);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
