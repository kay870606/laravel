<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\IndependentBeaconRequest;
use App\Http\Resources\BasicCollection;
use App\IndependentBeacon;
use Illuminate\Http\Request;

class IndependentBeaconController extends Controller
{
    public function latest()
    {
        $indepentBeacon = IndependentBeacon::query()->latest()->first()->toArray();
        return (new BasicCollection($indepentBeacon));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indepentBeacons = IndependentBeacon::orderBy('id')->get();
        return (new BasicCollection($indepentBeacons));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(IndependentBeaconRequest $request)
    {
        $validated = $request->validated();
        $independentBeacon = IndependentBeacon::create($validated);
        return $independentBeacon;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
