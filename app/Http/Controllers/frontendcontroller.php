<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendcontroller extends Controller

{
    public function index()
    {
        return view ('index');
    }
    public function about()
    {
        return view ('about');
    }
    public function resume()
    {
        return view ('resume');
    }
    public function contact()
    {
        return view ('contact');
    }
}
