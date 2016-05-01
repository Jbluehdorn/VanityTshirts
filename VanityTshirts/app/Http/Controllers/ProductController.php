<?php

namespace App\Http\Controllers;

use App\Product;
//use Illuminate\Http\Request;
use Request;

use App\Http\Requests;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function all() {
        $products = Product::orderBy('name')->get(['name', 'id']);

        return view('admin.products.showAll', compact('products'));
    }

    public function show(Product $product) {
        return view('admin.products.show', compact('product'));
    }

    public function newForm() {
        return view('admin.products.new');
    }

    public function newProduct(Request $request) {
        $imgDirectory = 'images';
        $defaultImg = $imgDirectory . '/default.png';

        $product = new Product($request::all());

        if($request::hasFile('picture')) {
            $file = $request::file('picture');
            $file->move(public_path() . '/' . $imgDirectory, $file->getClientOriginalName());
            $product->picture = $imgDirectory . '/' . $file->getClientOriginalName();
        } else {
            $product->picture = $defaultImg;
        }

        $product->save();

        return redirect('/admin/products');
    }
}
