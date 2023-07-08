<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home.index');
    }

    public function relationship()
    {
        $response['products'] = Product::all();
        $response['categories'] = Category::all();
        return view('pages.relationship.index')->with($response);
    }
}
