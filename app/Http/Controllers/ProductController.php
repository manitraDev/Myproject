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

    public function show(int $id)
    {
        return view('Products.show');
    }

    public function new()
    {
        return view('Products.new');
    }

    public function store(Request $request)
    {

    }

    public function edit(Request $request, int $id)
    {
        return view('edit');
    }
}
