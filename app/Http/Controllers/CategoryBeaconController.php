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
        $categoryBeacons = CategoryBeacon::with('category')->with('beacon')->orderBy('beacon_id')->get();
        return view('category-beacons.index', compact('categoryBeacons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::orderBy('number')->get();
        $beacons = Beacon::all();
        return view('category-beacons.create', compact('categories', 'beacons'));
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
        return redirect('/category-beacons');
    }

    /**
     * Display the specified resource.
     *
     * @param CategoryBeacon $categoryBeacon
     * @return Response
     */
    public function show(CategoryBeacon $categoryBeacon)
    {
        return view('category-beacons.show', compact('categoryBeacon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CategoryBeacon $categoryBeacon
     * @return Response
     */
    public function edit(CategoryBeacon $categoryBeacon)
    {
        $categories = Category::orderBy('number')->get();
        $beacons = Beacon::all();
        return view('category-beacons.edit', compact('categories', 'beacons', 'categoryBeacon'));
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
        return redirect('/category-beacons');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param CategoryBeacon $categoryBeacon
     * @return Response
     * @throws \Exception
     */
    public function destroy(CategoryBeacon $categoryBeacon)
    {
        $categoryBeacon->delete();
        return redirect('/category-beacons');
    }
}
