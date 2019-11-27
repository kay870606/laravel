<?php

namespace App\Http\Controllers;

use App\Beacon;
use App\Http\Requests\BeaconRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BeaconController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $beacons = Beacon::orderBy('id')->get();
        return view('beacons.index', compact('beacons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('beacons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
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
     * @param Beacon $beacon
     * @return Response
     */
    public function show(Beacon $beacon)
    {
        return view('beacons.show', compact('beacon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Beacon $beacon
     * @return Response
     */
    public function edit(Beacon $beacon)
    {
        return view('beacons.edit', compact('beacon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Beacon $beacon
     * @return Response
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
     * @param Beacon $beacon
     * @return Response
     * @throws \Exception
     */
    public function destroy(Beacon $beacon)
    {
        $beacon->delete();
        return redirect('/beacons');
    }
}
