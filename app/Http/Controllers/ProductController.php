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
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'prix' => 'required',
        ]);

        $produt = new Product();
        $produt->name = $request->name;
        $produt->description = $request->description;
        $produt->isPublished = $request->has("product_pusblished");
        $produt->prix = $request->prix;
        $produt->save();
        flash()->addSuccess("Produit enregistre avec success");
        return redirect()->route('list_products');
    }


    public function edit(Request $request, int $id)
    {
        return view('edit');
    }
}
