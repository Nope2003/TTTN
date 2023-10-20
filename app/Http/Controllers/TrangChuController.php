<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class TrangChuController extends Controller
{
    public function trangchu()
    {
        return view('users.trangchu', ['products'=>Product::get()]);
    }

    public function index()
    {
        return view('users.index');
    }

    
    
}
