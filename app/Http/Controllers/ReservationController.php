<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

        $idEvent = $request->idEvent;
        $eventexe =  Event::where('id', $idEvent)
            ->where('status', 'pending')
            ->first();
        $user = Auth::user()->id;
        if ($eventexe) {
            $reservation = Reservation::create([
                'event_id' => $idEvent,
                'user_id' => $user,
                'status' => 'pending',
            ]);
            return to_route('dashboard.user')->with('success', 'Your reservation event has been pending.');
        } else {
            $reservation = Reservation::create([
                'event_id' => $idEvent,
                'user_id' => $user,
                'status' => 'true',
            ]);
            return to_route('dashboard.user')->with('success', 'Your reservation event has been successfully.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
