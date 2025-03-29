<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            'Title 0',
            'Title 1',
            'Title 2',
            'Title 3',
            'Title 4',
            'Title 5',
        ];

        return view('index')->with(['posts' => $posts]);
    }
}
