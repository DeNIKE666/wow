<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function show(Category $category) {
        return view('pages.product.show', compact('category'));
    }
}
