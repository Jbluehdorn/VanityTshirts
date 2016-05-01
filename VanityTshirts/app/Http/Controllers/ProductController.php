<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

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
}
