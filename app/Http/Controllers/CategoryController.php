<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => ['required', 'unique:categories'],
        ]);

        $category = Category::create([
            'category_name' => $request->category_name,
        ]);

        return to_route('category')->with('success', 'Your category has been add successfully.');
    }
    public function filter(Request $request)
    {
        // dd($request->idCategory);
        $categoryFromDB = Category::all();
        $eventFromDB = Event::paginate(3)->where('acceptation', 'accepted')->where('category_id', $request->idCategory);
        return view('index', ['eventFromDB' => $eventFromDB, 'categories' => $categoryFromDB]);
    }
}
