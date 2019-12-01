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
        $categories = Category::with('beacons')->get();

        /*foreach ($categories->beacons as $beacon) {
            return $beacon;
        }*/
        /*$categoryBeacons = CategoryBeacon::with('category')->with('beacon')->orderBy('id')->get();*/
        //return $categories;
        return view('category-beacons.index', compact('categories'));
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
        Category::find($request->category_id)->beacons()->attach($request->beacon_id);
        return redirect('/category-beacons');
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return Response
     */
    public function show($id)
    {
        return view('category-beacons.show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $beacons = Beacon::all();
        return view('category-beacons.edit', compact('categories', 'beacons', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryBeaconRequest $request
     * @param $id
     * @return Response
     */
    public function update(CategoryBeaconRequest $request,$id)
    {
        $validated = $request->validated();
        $categoryBeacon->update($validated);
        return redirect('/category-beacons');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */
    public function destroy($id)
    {
        $categoryBeacon->delete();
        return redirect('/category-beacons');
    }
}
