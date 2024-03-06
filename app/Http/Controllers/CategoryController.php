<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request)
    {

        // dd($request->nameCategory);
        $request->validate([
            'category_name' => ['required', 'unique:' . Category::class],
        ]);

        $category = Category::created([
            'category_name' => $request->nameCategory,
        ]);

        return to_route('category')->with('success', 'Your category has been add successfully.');
    }
}
