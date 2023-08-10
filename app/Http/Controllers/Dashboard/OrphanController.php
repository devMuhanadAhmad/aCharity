<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Orphan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrphanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orphans = Orphan::latest()->simplePaginate(20);
        return view('dashboard.orphan.index', compact('orphans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orphan = new Orphan();
        return view('dashboard.orphan.create', compact('orphan'));

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
            'en_about_his_life' => 'required|string',
            'en_reason_he_needs_bail' => 'required|string',
            'en_name' => 'required|string',
            'en_address' => 'required|string',
            'en_current_incubator' => 'required|string',
            'en_health_status' => 'required|string',
            'en_brothers' => 'required|string',
            'en_study' => 'required|string',
            'ar_about_his_life' => 'required|string',
            'ar_reason_he_needs_bail' => 'required|string',
            'ar_name' => 'required|string',
            'ar_address' => 'required|string',
            'ar_current_incubator' => 'required|string',
            'ar_health_status' => 'required|string',
            'ar_brothers' => 'required|string',
            'ar_study' => 'required|string',
            'guarantee_amount' => 'required',
            'image' => [
                'nullable', 'max:1048576',
            ],
            'case' => 'required|in:yes,no',
        ]);
        $data = $request->except('image');
        if ($request->hasFile('image')) { //check isset image
            $file = $request->file('image'); //return object
            $path = $file->store('Orphans', ['disk' => 'public']);
            $data['image'] = $path;
        }
        Orphan::create($data);
        return redirect()->route('orphan.index')->with('success', __('operation accomplished successfully'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orphan = Orphan::findOrFail($id);
        return view('dashboard.orphan.edit', compact('orphan'));

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
        $category = Orphan::findOrFail($id);

        $request->validate([
            'en_about_his_life' => 'required|string',
            'en_reason_he_needs_bail' => 'required|string',
            'en_name' => 'required|string',
            'en_address' => 'required|string',
            'en_current_incubator' => 'required|string',
            'en_health_status' => 'required|string',
            'en_brothers' => 'required|string',
            'en_study' => 'required|string',
            'ar_about_his_life' => 'required|string',
            'ar_reason_he_needs_bail' => 'required|string',
            'ar_name' => 'required|string',
            'ar_address' => 'required|string',
            'ar_current_incubator' => 'required|string',
            'ar_health_status' => 'required|string',
            'ar_brothers' => 'required|string',
            'ar_study' => 'required|string',
            'guarantee_amount' => 'required',
            'image' => [
                'nullable', 'max:1048576',
            ],
            'case' => 'required|in:yes,no',
        ]);

        $old_image = $category->image;

        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('Orphans', ['disk' => 'public']);
            $data['image'] = $path;
        }
        if ($old_image && isset($data['image'])) {
            Storage::disk('public')->delete($old_image);
        }
        $category->update($data);
        return redirect()->route('orphan.index')->with('success', __('operation accomplished successfully'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $Orphan = Orphan::findOrFail($id);
        $Orphan->delete();

        if ($Orphan->image) {
            Storage::disk('public')->delete($Orphan->image);
        }

        return redirect()->route('orphan.index')->with('success', __('The deletion was completed successfully'));

    }

}
