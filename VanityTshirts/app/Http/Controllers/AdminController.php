<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index() {
        $user = Auth::user();

        return view('admin.dashboard', compact('user'));
    }
}
