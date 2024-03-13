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
        $event = Event::where('acceptation', 'accepted')->first();
        $categoryFromDB = Category::all();
        $eventFromDB = Event::where('acceptation', 'accepted')->where('category_id', $request->idCategory)->paginate(3);

        // No need for appends() method call
        // $eventFromDB->appends(['category' => $request->idCategory]);

        return view('index', ['event' => $event, 'eventFromDB' => $eventFromDB, 'categories' => $categoryFromDB]);
    }

    public function update(Request $request)
    {
        $category = Category::findOrFail($request->idTag);
        $request->validate([
            'category_name' => ['required', 'unique:categories'],
        ]);

        $category->update([
            'category_name' => $request->category_name,
        ]);
        return to_route('category')->with('success', 'Your category has been modify successfully.');
    }

    public function destroy(Request $request)
    {
        $category = Category::findOrFail($request->idCategory);
        $category->delete();
        return to_route('category')->with('success', 'Your category has been deleted successfully.');
    }
}
