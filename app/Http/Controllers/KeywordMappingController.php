<?php

namespace App\Http\Controllers;

use App\Http\Requests\KeywordMappingRequest;
use App\Keyword;
use App\KeywordMapping;
use Illuminate\Http\Request;

class KeywordMappingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param $keyword
     * @return \Illuminate\Http\Response
     */
    public function create($keyword)
    {
        $keyword = Keyword::find($keyword);
        return view('keywords.mapping.create', compact('keyword'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(KeywordMappingRequest $request, $keyword)
    {
        $validated = $request->validated();
        KeywordMapping::create([
            'keyword_id' => $keyword, 'name' => $request->name
        ]);
        return redirect('/keywords/' . $keyword);
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
    public function destroy($keywords, $mapping)
    {
        KeywordMapping::where('id', $mapping)->delete();
        return redirect('/keywords/' . $keywords);
    }
}
