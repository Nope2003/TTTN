<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admins;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home_admins()
    {
        return view('admins.home');
    }
}
