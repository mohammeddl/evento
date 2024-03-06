<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request)
    {

        // dd($request->nameCategory);
        // $request->validate([
        //     'name' => ['required', 'unique:' . Category::class],
        // ]);
        $request->validate([
            'category_name' => ['required', 'unique:categories'],
        ]);

        $category = Category::create([
            'category_name' => $request->category_name,
        ]);

        return to_route('category')->with('success', 'Your category has been add successfully.');
    }
}
