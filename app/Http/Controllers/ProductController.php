<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_category_id' => 'required|exists:mst_category,id',
            'name' => 'required|string|max:150',
            'price' => 'required|integer',
            'image' => 'nullable|image',
        ]);

        $product = new Product($request->all());

        if ($request->hasFile('image')) {
            $product->image = file_get_contents($request->file('image')->path());
        }

        $product->save();

        return $product;
    }

    public function show(Product $product)
    {
        return $product;
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product_category_id' => 'required|exists:mst_category,id',
            'name' => 'required|string|max:150',
            'price' => 'required|integer',
            'image' => 'nullable|image',
        ]);

        $product->fill($request->all());

        if ($request->hasFile('image')) {
            $product->image = file_get_contents($request->file('image')->path());
        }

        $product->save();

        return $product;
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return response()->noContent();
    }
}

