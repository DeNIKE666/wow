<?php

namespace App\Http\Controllers\Admin;

use App\Imports\ProductImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        $products = Product::paginate(100);

        $categories = Category::get()->toTree();

        return view('admin.pages.products.index', compact('products' , 'categories'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function create(Request $request)
    {
        Product::create($request->all());

        return redirect()->route('admin.products');
    }

    /**
     * @param Request $request
     * @return mixed
     */

    public function import(Request $request)
    {
        Excel::import(new ProductImport($request->all()), $request->file('import'));

        return redirect()->route('admin.products')->withSuccess("Импорт товаров успешно заверён");
    }

    /**
     * @param Product $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function edit(Product $product)
    {
        $categories = Category::get()->toTree();
        return view('admin.pages.products.edit', compact('product', 'categories'));
    }

    /**
     * @param Request $request
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return redirect()->route('admin.products');
    }

    /**
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */

    public function delete(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.products');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */

    public function deletes()
    {
        Product::truncate();

        return redirect()->route('admin.products');
    }
}
