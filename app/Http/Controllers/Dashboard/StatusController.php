<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Satus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statuss=Satus::with('category')->latest()->simplePaginate(20);
        return view('dashboard.status.index',compact('statuss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        $status = new Satus();
        return view('dashboard.status.create',compact('status','categories'));

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
            'category_id'=>'required',
            'ar_name' => [
                'required',
                'string',
                'min:3',
                'max:255',

            ],
            'ar_description' => [
                'required', 'string',
            ],
            'en_name' => [
                'required',
                'string',
                'min:3',
                'max:255',

            ],
            'en_description' => [
                'required', 'string',
            ],

            'image' => [
                 'required','max:1048576',
            ],
            'price' => [
                'required','numeric'
           ],

        ]);
        $data = $request->except('image');
        if ($request->hasFile('image')) { //check isset image
            $file = $request->file('image'); //return object
            $path = $file->store('status', ['disk' => 'public']);
            $data['image'] = $path;
        }
        Satus::create($data);
        return redirect()->route('status.index')->with('success', __('operation accomplished successfully'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=Category::all();
        $status = Satus::findOrFail($id);
        return view('dashboard.status.edit', compact('status','categories'));

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
            'category_id'=>'required',
            'ar_name' => [
                'required',
                'string',
                'min:3',
                'max:255',

            ],
            'ar_description' => [
                'required', 'string',
            ],
            'en_name' => [
                'required',
                'string',
                'min:3',
                'max:255',

            ],
            'en_description' => [
                'required', 'string',
            ],

            'image' => [
                 'image','max:1048576',
            ],
            'price' => [
                'required',
           ],

        ]);
        $status = Satus::findOrFail($id);
        $old_image = $status->image;
        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('status', ['disk' => 'public']);
            $data['image'] = $path;
        }
        if ($old_image && isset($data['image'])) {
            Storage::disk('public')->delete($old_image);
        }
        $status->update($data);
        return redirect()->route('status.index')->with('success', __('operation accomplished successfully'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Satus $status)
    {
        $status->delete();

        if ($status->image) {
            Storage::disk('public')->delete($status->image);
        }

       return redirect()->route('status.index')->with('success', __('The deletion was completed successfully'));

    }
}
