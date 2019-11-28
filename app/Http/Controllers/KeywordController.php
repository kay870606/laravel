<?php

namespace App\Http\Controllers;

use App\Keyword;
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
        return $keywords;
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
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $everyLineToArray = explode("\r\n", $request->mapping);
        $removeDuplicate = array_unique($everyLineToArray);
        /*$validated = $request->validated();
        Keyword::create($validated);*/
        foreach ($removeDuplicate as $removeDuplicates) {
            Keyword::create([
                'name' => $request->name, 'mapping' => $removeDuplicates
            ]);
        }
        return redirect('/keywords');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Keyword $keyword
     * @return Response
     */
    public function show(Keyword $keyword)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Keyword $keyword
     * @return Response
     */
    public function edit(Keyword $keyword)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param \App\Keyword $keyword
     * @return Response
     */
    public function update(Request $request, Keyword $keyword)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Keyword $keyword
     * @return Response
     */
    public function destroy(Keyword $keyword)
    {
        //
    }
}
