<?php

namespace App\Http\Controllers;
use App\User;
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
        $query3 = User::orderBy('created_at')->take(3)->get();
        return view('welcome', compact('query3'));
    }
    
    public function about() {
        return view('about');
    }
    
    public function products() {
        return view('products');
    }
    public function cart() {
        return view('shopping-cart');
    }
}
