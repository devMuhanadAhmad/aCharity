<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events=Event::latest()->simplePaginate(20);
        return view('dashboard.event.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = new Event();
        return view('dashboard.event.create',compact('event'));

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
            'ar_title' => [
                'required',
                'string',
                'min:3',
                'max:255',

            ],
            'ar_description' => [
                'required', 'string',
            ],
            'en_title' => [
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
            'date' => [
                'required',
           ],
            'status' => 'nullable|in:active,inactive',
        ]);
        $data = $request->except('image');
        if ($request->hasFile('image')) { //check isset image
            $file = $request->file('image'); //return object
            $path = $file->store('events', ['disk' => 'public']);
            $data['image'] = $path;
        }
        Event::create($data);
        return redirect()->route('event.index')->with('success', __('operation accomplished successfully'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('dashboard.event.edit', compact('event'));

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
        $category = Event::findOrFail($id);

        $request->validate([
            'ar_title' => [
                'required',
                'string',
                'min:3',
                'max:255',

            ],
            'ar_description' => [
                'required', 'string',
            ],
            'en_title' => [
                'required',
                'string',
                'min:3',
                'max:255',

            ],
            'en_description' => [
                'required', 'string',
            ],

            'image' => [
                 'max:1048576',
            ],
            'date' => [
                'date',
           ],
            'status' => 'nullable|in:active,inactive',
        ]);
        $old_image = $category->image;

        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('events', ['disk' => 'public']);
            $data['image'] = $path;
        }
        if ($old_image && isset($data['image'])) {
            Storage::disk('public')->delete($old_image);
        }
        $category->update($data);
        return redirect()->route('event.index')->with('success', __('operation accomplished successfully'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $event=Event::findOrFail($id);
        $event->delete();

        if ($event->image) {
            Storage::disk('public')->delete($event->image);
        }

       return redirect()->route('event.index')->with('success', __('The deletion was completed successfully'));

    }

    public function allEventFrontShow(){
        $events=Event::latest()->simplePaginate(10);
        return view('front.events',compact('events'));
    }
    public function singleEventFrontShow($id){
        $event=Event::findOrFail($id);
        return view('front.event',compact('event'));
    }
}
