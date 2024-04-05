<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function datatables(Request $request)
    {
        $query = Products::select(['id', 'name', 'qty', 'price', 'description']);

        return datatables()
            ->of($query)
            ->addColumn('action', function ($product) {
                return '<button class="btn btn-primary btn-lg show" style="vertical-align: middle;" onclick="window.location.href=\''. route("product.edit", ["product" => $product->id]) .'\'">Edit Product</button>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'nullable'
        ]);

        Products::create($data);

        return redirect()->route('product.index');
    }

    public function edit(Products $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    public function update(Products $product, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'nullable'
        ]);

        $product->update($data);

        return redirect()->route('product.index')->with('Success','Product Updated!');
    }
}
