<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function search(Request $request)
    {
        $title = $request->input('title');
        $location = $request->input('location');

        $event = Event::where('title', 'like', "%$title%")
            ->where('location', 'like', "%$location%")
            ->get();

        return response()->json($event);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);

        return view('eventShow', ['item' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        $categoryFromDB = Category::all();
        return view('modifyEvent', ['item' => $event, 'categories'=>$categoryFromDB]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {

        $request->validate([
            'image' => ['required'],
            'title' => ['required'],
            'description' => ['required'],
            'location' => ['required'],
            'date' => ['required','after_or_equal:today'],
            'capacity' => ['required'],
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        } else {
            $imageName = '';
        }

        $user = Auth::user()->organizer->id;
        $event = Event::findOrFail($user);
        $event->update([
            'image' => $imageName,
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'date' => $request->date,
            'category' => $request->category,
            'capacity' => $request->capacity,
            'organizer_id' => $user,
            'status' => $request->status,
        ]);

        return to_route('dashboard')->with('success', 'Your event has been add successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
