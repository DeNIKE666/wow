<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('preview.index');
    }

    public function pageInfo()
    {
        return view('pages.page_info');
    }

    public function pageShop()
    {
        $categories = Category::get()->toTree();

        return view('pages.page_shop', compact('categories'));
    }
}
