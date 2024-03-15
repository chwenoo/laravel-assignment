<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {

        $imgName = time().'.'.$request->image->getClientOriginalExtension();
        // $request->image->move(public_path('/product_images'), $imgName);
        $request->file('image')->storeAs('public/img', $imgName);
        // dd($path);

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status,
            'image' => $imgName,
            'price' => $request->price,
        ]);

        return redirect()->route('products.index');
    }

    public function edit($id) {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id) {
        $product = Product::find($id);
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status,
            'price' => $request->price,
        ]);
        return redirect()->route('products.index');
    }
}
