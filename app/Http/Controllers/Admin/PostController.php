<?php



namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    function dashboard()
    {
        return view('admin.dashboard');
    }
    public function create()
    {
        return view('admin.posts.create');
    }
}
