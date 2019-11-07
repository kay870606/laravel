<?php

namespace App\Http\Controllers;

use App\Beacon;
use App\Http\Requests\BeaconRequest;
use Illuminate\Http\Request;

class BeaconController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beacons = Beacon::all();

        return view('beacons.index', compact('beacons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beacons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BeaconRequest $request)
    {
        $validated = $request->validated();
        Beacon::create($validated);

        return redirect('/beacons');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Beacon  $beacon
     * @return \Illuminate\Http\Response
     */
    public function show(Beacon $beacon)
    {
        return view('beacons.show', compact('beacon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Beacon  $beacon
     * @return \Illuminate\Http\Response
     */
    public function edit(Beacon $beacon)
    {
        return view('beacons.edit', compact('beacon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Beacon  $beacon
     * @return \Illuminate\Http\Response
     */
    public function update(BeaconRequest $request, Beacon $beacon)
    {
        $validated = $request->validated();
        $beacon->update($validated);
        return redirect('/beacons');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Beacon  $beacon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beacon $beacon)
    {
        $beacon->delete();
        return redirect('/beacons');
    }
}
