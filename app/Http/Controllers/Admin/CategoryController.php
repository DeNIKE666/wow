<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\Category as RequestCategory;
use App\Http\Controllers\Controller;
use http\Client\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get()->toTree();

        return view('admin.categories.index', compact('categories'));
    }

    public function create(RequestCategory $request) {

        Category::create($request->all());

        return redirect()->route('categories');
    }

    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    public function edit(Category $category) {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(RequestCategory $request, Category $category) {
        $category->update($request->all());
        return redirect()->route('categories');
    }
}
