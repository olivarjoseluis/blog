<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PaginasController extends Controller
{
    function inicio()
    {
        $posts = Post::latest('fecha_publicado')->get();
        return view('welcome', compact('posts'));
    }
}
