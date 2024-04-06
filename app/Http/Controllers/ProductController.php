<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function signup()
    {
        return view('signup');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:3|',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/')->with('success', 'Registration successful. You can now login.');
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
