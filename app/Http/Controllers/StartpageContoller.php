<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class StartpageContoller extends Controller
{
    public function index()
    {   
            
        //sortieren nach neueste oben (->limit(5) //lezten 5 beiträge)8//als gelöscht markierte sollen ausgeblendent werden)
        
        $posts = Post::with('user')
            ->latest()
            ->active()
            ->limit(5)
            ->get();

        return view('index', compact('posts'));
    }
}
