<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$subcategories = DB::table('subcategories')
            ->join('categories', 'subcategories.category_id', '=', 'categories.id')
            ->select('subcategories.*', 'categories.number')
            ->get();*/

        $subcategories = Subcategory::with('category')->get();

        //return $subcategories;
        return view('subcategories.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('subcategories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$subcategory = new Subcategory();
        $category_number = $request->input('category_number');
        $category_id = Category::where('number', $category_number)->select('id')->first()->id;
        $subcategory->category_id = $category_id;
        $subcategory->name = $request->name;
        $subcategory->save();*/
        //return $request->input('category_id');

        Subcategory::create($this->validateSubcategory());
        return redirect('/subcategories');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subcategory = Subcategory::with('category')->find($id);

        //return $subcategory;
        return view('subcategories.show', compact('subcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $subcategory = Subcategory::findOrFail($id);
        //return  compact('subcategory','categories');
        return view('subcategories.edit', compact('subcategory','categories'));
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
        $subcategory = Subcategory::findOrFail($id)
            ->update($this->validateSubcategory());

        return redirect('/subcategories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory = Subcategory::findOrFail($id)
            ->delete();

        return redirect('/subcategories');
    }

    protected function validateSubcategory()
    {
        return request()->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required'
        ]);
    }
}
