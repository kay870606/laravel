<?php

namespace App\Http\Controllers;

use App\Http\Requests\KeywordRequest;
use App\Keyword;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class KeywordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $keywords = Keyword::orderBy('id')->get();
        return view('keywords.index', compact('keywords'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('keywords.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param KeywordRequest $request
     * @return Response
     */
    public function store(KeywordRequest $request)
    {
        $validated = $request->validated();
        Keyword::create($validated);
        return redirect('/keywords');
    }

    /**
     * Display the specified resource.
     *
     * @param Keyword $keyword
     * @return Response
     */
    public function show(Keyword $keyword)
    {
        return view('keywords.show', compact('keyword'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Keyword $keyword
     * @return Response
     */
    public function edit(Keyword $keyword)
    {
        return view('keywords.edit', compact('keyword'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param KeywordRequest $request
     * @param Keyword $keyword
     * @return Response
     */
    public function update(KeywordRequest $request, Keyword $keyword)
    {
        $validated = $request->validated();
        $keyword->update($validated);
        return redirect('/keywords');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Keyword $keyword
     * @return Response
     * @throws Exception
     */
    public function destroy(Keyword $keyword)
    {
        $keyword->delete();
        return redirect('/keywords');
    }
}
