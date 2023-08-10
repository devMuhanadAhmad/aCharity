<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catigories=Category::latest()->simplePaginate(20);
        return view('dashboard.category.index',compact('catigories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $category = new Category();
        return view('dashboard.category.create',compact('category'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'ar_title'=>'required|string|min:3',
            'en_title'=>'required|string|min:3'
        ]);
        Category::create($request->all());
        return redirect()->route('category.index')->with('success', __('operation accomplished successfully'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('dashboard.category.edit', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'ar_title'=>'required|string|min:3',
            'en_title'=>'required|string|min:3'
        ]);
        $category = Category::findOrFail($id);

        $old_image = $category->image;
        $category->update($request->all());
        return redirect()->route('category.index')->with('success', __('operation accomplished successfully'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();



       return redirect()->route('category.index')->with('success', __('The deletion was completed successfully'));

    }
}
