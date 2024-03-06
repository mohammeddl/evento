<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $EventFromDb = Event::where('acceptation', 'pending')->get();
        $countUsers = User::count();
        $userFromDB = User::where('role', 'organizer')->get();
        return view('dashboardAdmin', ['users' => $userFromDB, 'countUsers' => $countUsers, 'events' => $EventFromDb]);
    }

    public function destroy($id)
    {
        $usersFromDB = user::findOrFail($id);
        $usersFromDB->delete();
        return to_route('admin')->with('success', 'User has been deleted successfully');
    }

    public function modify(Request $request)
    {
        $eventFromDB = Event::findOrFail($request->id);

        $eventFromDB->update([
            'acceptation' => 'accepted',
        ]);
        return to_route('admin')->with('success', 'Event has been accepted successfully');
    }

    public function category()
    {
        return view('categoryAdmin');
    }
}
