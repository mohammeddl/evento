<?php

namespace App\Http\Controllers;

use App\Mail\ticketMail;
use App\Models\Reservation;
use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
        $user = Auth::user()->id;
        $idEvent = $request->idEvent;
        $eventexe =  Event::where('id', $idEvent)
            ->where('status', 'pending')
            ->first();
        if ($eventexe) {
            $reservation = Reservation::create([
                'event_id' => $idEvent,
                'user_id' => $user,
                'status' => 'pending',
            ]);
            return to_route('index')->with('info', 'Your reservation event has been pending.');
        } else {
            $reservation = Reservation::create([
                'event_id' => $idEvent,
                'user_id' => $user,
                'status' => 'true',
            ]);
            $ticketId = uniqid();
            $ticket = Ticket::created([
                'reservation_id' => $reservation->id,
                'ticket' => $ticketId,
            ]);
            $user = Auth::user()->name;
            $pdf = Pdf::loadView('ticket', ['tickets' => $ticket, 'users' => $user]);
            return $pdf->download('ticket.pdf');
            // Mail::to()->send(new ticketMail());
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
