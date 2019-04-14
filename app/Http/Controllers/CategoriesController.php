<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index')->with('categories', $categories);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:5|max:50'
        ]);

        $data = request()->all();

        $category = new Category();

        $category->name = $data['name'];

        $category->save();

        session()->flash('success', 'Category created successfully.');

        return redirect('/categories');
    }

    public function edit(Category $category)
    {
        return view('categories.edit')->with('category', $category);
    }

    public function update(Category $category)
    {
        $this->validate(request(), [
            'name' => 'required|min:5|max:50'
        ]);

        $data = request()->all();

        $category->name = $data['name'];

        $category->save();

        session()->flash('success', 'Category updated successfully.');

        return redirect('/categories');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        session()->flash('success', 'Category deleted successfully.');

        return redirect('/categories');
    }


}
