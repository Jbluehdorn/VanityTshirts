<?php

namespace App\Http\Controllers;
use App\Product;
use App\Employee;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $products = Product::orderBy('created_at', 'desc')->take(3)->get();
        return view('welcome', compact('products'));
    }
    
    public function about() {
        $employees = Employee::orderBy('lastName')->get();
        return view('about', compact('employees'));
    }
    
    public function products() {
        $products = Product::orderBy('cost')->get();
        return view('products', compact('products'));
    }
    public function cart() {
        return view('shopping-cart');
    }
}
