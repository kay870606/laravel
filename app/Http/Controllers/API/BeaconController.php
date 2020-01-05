<?php

namespace App\Http\Controllers\API;

use App\Beacon;
use App\Http\Controllers\Controller;
use App\Http\Resources\BasicCollection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BeaconController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return BasicCollection
     */
    public function index()
    {
        $beacons = Beacon::orderBy('id')->with('categories')->get();

        return (new BasicCollection($beacons))->additional(['api_id' => 7]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return BasicCollection
     */
    public function show($id)
    {
        $beacon = Beacon::where('id', $id)
            ->with('categories.categoryActivities')
            ->get();
        return (new BasicCollection($beacon))->additional(['api_id' => 8]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
