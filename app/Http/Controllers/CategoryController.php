<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|unique:categories,name'
        ]);
        Category::create($request->all());
        return redirect()->route('category')->with('success', 'Category created successfully');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
  $category = Category::findOrFail($id);
        $request->validate([
              'name' => 'required|unique:categories,name,' . $category->id,
        ]);
      
      $category->name=$request->name;
        $category->save();
        return redirect()->route('category')->with('success', 'Category updated successfully');
    }

public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category')->with('success', 'Category deleted successfully');
    }









}
