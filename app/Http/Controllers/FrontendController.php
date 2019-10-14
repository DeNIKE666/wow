<?php

namespace App\Http\Controllers;

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
        return view('pages.page_shop');
    }
}
