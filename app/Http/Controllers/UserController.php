<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoryFromDB = Category::all();
        $eventFromDB = Event::where('acceptation', 'accepted')->paginate(3);
        $event = Event::where('acceptation', 'accepted')->first();
        return view('index', ['eventFromDB' => $eventFromDB, 'categories' => $categoryFromDB, 'event' => $event]);
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
    }
}
