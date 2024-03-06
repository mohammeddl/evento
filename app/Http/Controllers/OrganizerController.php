<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class OrganizerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoryFromDB = Category::all();
        return view('dashboard', ['categories' => $categoryFromDB]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required'],
            'title' => ['required'],
            'description' => ['required'],
            'location' => ['required'],
            'date' => ['required'],
            'capacity' => ['required'],
            'price' => ['required'],

        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        } else {
            $imageName = '';
        }


        $user = Auth::user()->organizer->id;

        $event = Event::create([
            'image' => $imageName,
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'date' => $request->date,
            'category_id' => $request->category,
            'capacity' => $request->capacity,
            'price' => $request->price,
            'organizer_id' => $user,
        ]);

        return to_route('dashboard')->with('success', 'Your event has been add successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
