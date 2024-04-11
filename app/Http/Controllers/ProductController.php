<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }
    
    public function profile()
    {   
        // if (Auth::check()) {
        //     $userId = auth()->id(); 
        // }
        $user = Auth::user();
        return view('profile.profile',['user' => $user]);
    }

    public function verify(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
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
                return '<button class="btn btn-primary btn-lg show" style="vertical-align: middle;" onclick="window.location.href=\'' . route("product.edit", ["product" => $product->id]) . '\'">Edit Product</button>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        return view('products.create');
    }
    public function dashboard1()
    {
        return view('dashboard');
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

    public function editProfile()
    {
        $user = Auth::user();
        return view('profile.editprofile', ['user' => $user]);
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

        return redirect()->route('product.index')->with('success', 'Product Updated!');
    }

    public function storeProfile(User $user, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'mobile_number' => 'required|numeric',
            'description' => 'nullable',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);
        if ($request->hasFile('picture')) {
            $picturePath = $request->file('picture')->store('pictures', 'public');
            $data['pfp'] = $picturePath;
        }
        $user->update($data);
        return redirect()->route('user.profile')->with('success', 'Product Updated!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'You have been logged out.');
    }
}
