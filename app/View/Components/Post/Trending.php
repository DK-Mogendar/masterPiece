<?php

namespace App\View\Components\Post;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Trending extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $posts = collect([
            ["title"=>"Intersseanter Beitrag 1", "id"=>1],
            ["title"=>"Intersseanter Beitrag 2", "id"=>2],
            ["title"=>"Intersseanter Beitrag 3", "id"=>3],
            ["title"=>"Intersseanter Beitrag 4", "id"=>4],
            ["title"=>"Intersseanter Beitrag 5", "id"=>5],
        ]);
        
        return view('components.post.trending', compact('posts'));
    }
}
