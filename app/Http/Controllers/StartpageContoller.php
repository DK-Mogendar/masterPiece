<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartpageContoller extends Controller
{
    public function index()
    {
       
        $posts =[];
        return view('index', compact('posts'));
    }
}
