<?php

namespace App\Http\Controllers;

use App\Beacon;
use App\Category;
use App\CategoryBeacon;
use App\Http\Requests\CategoryBeaconRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryBeaconController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$categoriesBeacons = Category::has('beacons')->with('beacons')->get();
        //return DB::table('category_beacon')->get();
        //return CategoryBeacon::all();
        $categoriesBeacons = CategoryBeacon::with('category')->with('beacon')->get();
        //return $categoriesBeacons;
        return view('category-beacon.index', compact('categoriesBeacons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::all();
        $beacons = Beacon::all();
        return view('category-beacon.create', compact('categories', 'beacons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryBeaconRequest $request
     * @return Response
     */
    public function store(CategoryBeaconRequest $request)
    {
        $validated = $request->validated();
        CategoryBeacon::create($validated);
        return redirect('/category-beacon');
    }

    /**
     * Display the specified resource.
     *
     * @param CategoryBeacon $categoryBeacon
     * @return Response
     */
    public function show(CategoryBeacon $categoryBeacon)
    {
        //return $id;
        //$categoryBeacon= CategoryBeacon::findOrFail($id);
        //return $categoryBeacon;
        return view('category-beacon.show', compact('categoryBeacon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CategoryBeacon $categoryBeacon
     * @return Response
     */
    public function edit(CategoryBeacon $categoryBeacon)
    {
        $categories = Category::all();
        $beacons = Beacon::all();
        return view('category-beacon.edit', compact('categories', 'beacons', 'categoryBeacon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryBeaconRequest $request
     * @param CategoryBeacon $categoryBeacon
     * @return Response
     */
    public function update(CategoryBeaconRequest $request, CategoryBeacon $categoryBeacon)
    {
        $validated = $request->validated();
        $categoryBeacon->update($validated);
        return redirect('/category-beacon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param CategoryBeacon $categoryBeacon
     * @return Response
     */
    public function destroy(CategoryBeacon $categoryBeacon)
    {
        $categoryBeacon->delete();
        return redirect('/category-beacon');
    }
}
