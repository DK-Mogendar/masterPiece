<?php

namespace App\View\Components\Post;

use Closure;
use Faker\Provider\Lorem;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

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
        $posts = collect([
            ["title"=>"Beitrag 1", "author"=>"Max", "id"=>1,"slug"=>"slug-1", "body"=> "Lorem", "views"=> 10],
            ["title"=>"Beitrag 2", "author"=>"Max", "id"=>2,"slug"=>"slug-2", "body"=> "Lorem", "views"=> 45],
            ["title"=>"Beitrag 3", "author"=>"Max", "id"=>3,"slug"=>"slug-3", "body"=> "Lorem", "views"=> 30],
            ["title"=>"Beitrag 4", "author"=>"Hans", "id"=>4,"slug"=>"slug-4", "body"=> "Lorem", "views"=> 25],
            ["title"=>"Beitrag 5", "author"=>"Hans", "id"=>5,"slug"=>"slug-5", "body"=> "Lorem", "views"=> 35],
        ]);
//--------------------------------------------------übung Collection------------------------------------------------------------
        //dd($posts->sortBy('id')->pluck('title', key:'slug')->implode(","));

        //dd($posts->groupBy('author')->map(function($item,$key) {
            //return $item->sum('views');
        //}));
//--------------------------------------------------übung Collection------------------------------------------------------------


        return view('components.post.newest', compact('posts'));
    }
}