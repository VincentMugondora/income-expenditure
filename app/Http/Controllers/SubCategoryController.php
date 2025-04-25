<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        $subcategories = SubCategory::with('category')->get();
        return view('subcategories.index', compact('subcategories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('subcategories.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255|unique:subcategories']);
        SubCategory::create($request->all());
        return redirect()->route('subcategories.index')->with('success', 'Subcategory added successfully.');
    }
}