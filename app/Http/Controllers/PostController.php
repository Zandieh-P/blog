<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Gate;

//use App\Models\Category;
//use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->filter(
                request(['search', 'category', 'author']))
                ->Paginate(6)->withQueryString()
        ]);

        /*return view('posts.index', [
            'posts' => Post::latest()->filter(
                request(['search','category','author']))
                ->get()
//            ,'categories' =>Category::all()
//            ,'currentCategory'=>Category::firstWhere('slug',request('category'))
        ]);*/
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
