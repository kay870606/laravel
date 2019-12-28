<?php

namespace App\Http\Controllers\API;

use App\Activity;
use App\Http\Controllers\Controller;
use App\Http\Resources\BasicCollection;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return BasicCollection
     */
    public function index()
    {
        $activities = Activity::orderBy('id')->get();
        return (new BasicCollection($activities))->additional(['api_id' => 5]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activity = Activity::where('id', $id)->first();
        return (new BasicCollection($activity))->additional(['api_id' => 6]);
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
