<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        switch ($request->user()->role) {
            case 'organizer':
                return redirect()->route('dashboard.user');
            case 'user':
                return redirect()->route('candida.index');
            case 'admin':
                return redirect()->route('admin');
            default:
                abort(403, 'Unauthorized action.');
        }
    }
}
