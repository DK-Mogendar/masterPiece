<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class StartpageContoller extends Controller
{
    public function index()
    {
       
        $posts = Post::all()->sortByDesc(callback:'created_at');
        //lezten 5 beiträge
        //sortieren nach neueste oben
        //als gelöscht markierte sollen ausgeblendent werden

        return view('index', compact('posts'));
    }
}
