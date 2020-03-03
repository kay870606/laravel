<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Http\Requests\ActivityRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function index()
    {
        $activities = Activity::orderBy('id')->get();
        return view('activities.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('activities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ActivityRequest $request
     * @return Response
     */
    public function store(ActivityRequest $request)
    {
        $path = $request->image->store(Activity::getDefaultImageStoragePath());
        Activity::create(
            ['name' => $request->name, 'image_path' => $path]
        );
        return redirect('/activities');
    }

    /**
     * Display the specified resource.
     *
     * @param Activity $activity
     * @return Response
     */
    public function show(Activity $activity)
    {
        return view('activities.show', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Activity $activity
     * @return Response
     */
    public function edit(Activity $activity)
    {
        return view('activities.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Activity $activity
     * @return Response
     */
    public function update(ActivityRequest $request, Activity $activity)
    {
        if ($request->hasFile('image')) {
            $path = $request->image->store(Activity::getDefaultImageStoragePath());
            $activity->update(
                ['name' => $request->name, 'image_path' => $path]
            );
        } else {
            $activity->update(
                ['name' => $request->name]
            );
        }

        return redirect('/activities');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Activity $activity
     * @return Response
     * @throws \Exception
     */
    public function destroy(Activity $activity)
    {
        $activity->delete();
        return redirect('/activities');
    }
}
