<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\Category as RequestCategory;
use App\Http\Controllers\Controller;
use http\Client\Request;

class CategoryController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Все категории
     */
    public function index()
    {
        $categories = Category::get()->toTree();

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * @param RequestCategory $request
     * @return \Illuminate\Http\RedirectResponse
     * Страница создания категории
     */
    public function create(RequestCategory $request)
    {
        Category::create($request->all());

        return redirect()->route('categories');
    }

    /**
     * @param RequestCategory $request
     * @param Category $category
     * @return \Illuminate\Http\RedirectResponse
     * Создание подкатегорий
     */

    public function subCategory(RequestCategory $request, Category $category)
    {
        $category->children()->create($request->all());
        return redirect()->route('category.show', $category);
    }

    /**
     * @param Category $category
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Показать категорию
     */

    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    /**
     * @param Category $category
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница редактирвоания категории
     */

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * @param RequestCategory $request
     * @param Category $category
     * @return \Illuminate\Http\RedirectResponse
     * Обновление данных категории
     */

    public function update(RequestCategory $request, Category $category)
    {
        $category->update($request->all());

        return redirect()->route('categories');
    }


    /**
     * @param Category $category
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     * Удаление категории
     */

    public function delete(Category $category) {

        $category->delete();

        return redirect()->route('categories');
    }
}
