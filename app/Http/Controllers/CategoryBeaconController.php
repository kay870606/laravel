<?php

namespace App\Http\Controllers;

use App\Beacon;
use App\Category;
use App\CategoryBeacon;
use App\Http\Requests\CategoryBeaconRequest;
use Illuminate\Http\Request;

class CategoryBeaconController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$categoriesBeacons = Category::has('beacons')->with('beacons')->get();
        //return DB::table('category_beacon')->get();
        //return CategoryBeacon::all();
        $categoriesBeacons = CategoryBeacon::with('category')->with('beacon')->get();
        //return $categoriesBeacons;
        return view('categories-beacons.index', compact('categoriesBeacons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $beacons = Beacon::all();
        return view('categories-beacons.create', compact('categories', 'beacons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryBeaconRequest $request)
    {
        $validated = $request->validated();
        CategoryBeacon::create($validated);
        return redirect('/category_beacon');
    }

    /**
     * Display the specified resource.
     *
     * @param CategoryBeacon $categoryBeacon
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryBeacon $categoryBeacon)
    {
        //return $id;
        //$categoryBeacon= CategoryBeacon::findOrFail($id);
        //return $categoryBeacon;
        return view('categories-beacons.show', compact('categoryBeacon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CategoryBeacon $categoryBeacon
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryBeacon $categoryBeacon)
    {
        $categories = Category::all();
        $beacons = Beacon::all();
        return view('categories-beacons.edit', compact('categories', 'beacons', 'categoryBeacon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryBeaconRequest $request
     * @param CategoryBeacon $categoryBeacon
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryBeaconRequest $request, CategoryBeacon $categoryBeacon)
    {
        $validated = $request->validated();
        $categoryBeacon->update($validated);
        return redirect('/category_beacon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param CategoryBeacon $categoryBeacon
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryBeacon $categoryBeacon)
    {
        $categoryBeacon->delete();
        return redirect('/category_beacon');
    }
}