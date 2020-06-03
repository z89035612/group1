<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function who(Request $request)
    {
        dd(Auth::user());
    }

    public function loginout()
    {
        Auth::logout();
    }
}
