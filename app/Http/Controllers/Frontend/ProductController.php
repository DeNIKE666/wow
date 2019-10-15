<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * @param Category $category
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function show(Category $category)
    {
        return view('pages.product.show', compact('category'));
    }

    /**
     * @param Product $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function options(Product $product)
    {
        return view('pages.product.options', compact('product'));
    }

    /**
     * @param Request $request
     * @param Product $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function cart(Request $request, Product $product) {

        if ($request->isMethod('post')) {
            $sum = $request->input('sum');
            $count = $request->input('count');
        }

        return view('pages.product.cart', [
            'sum' => $sum ?? 0,
            'count' => $count ?? 0,
            'product' => $product,
        ]);
    }
}
