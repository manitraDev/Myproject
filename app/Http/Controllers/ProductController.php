<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index()
    {
        $produts = Product::all();
        return view('Products.index', compact('produts'));
    }

    public function show()
    {
        return view('Products.show');
    }
}
