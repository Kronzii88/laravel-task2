<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        return view('home');
    }
    public function table()
    {
        return view('table.index');
    }
    public function tables()
    {
        return view('table.tables');
    }
}
