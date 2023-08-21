<?php

namespace App\View\Components\Post;

use Closure;
use Faker\Provider\Lorem;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Post;

class Newest extends Component
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
        $posts = Post::latest()
        ->active()
        ->limit(10)
        ->get();

        return view('components.post.newest', compact('posts'));
    }
}