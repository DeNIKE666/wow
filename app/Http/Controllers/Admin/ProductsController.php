<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::paginate(100);

        return view('admin.pages.products.index', compact('products'));
    }

    public function edit(Product $product) {
        return view('admin.pages.products.edit', compact('product'));
    }
}
