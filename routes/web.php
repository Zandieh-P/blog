<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class,'index'])->name('home');
Route::get('posts/{post:slug}', [PostController::class,'show']);

/*Route::get('/', function () {
    \Illuminate\Support\Facades\DB::listen(function ($query) {
        logger($query->sql, $query->bindings);
//        \Illuminate\Support\Facades\Log::info($query->sql, $query->bindings);
    });
    $posts = Post::latest();
    if (request('search')) {
        $posts = $posts
            ->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('body', 'like', '%' . request('search') . '%');
    }
    return view('posts', [
        'posts' => $posts->get(),
        'categories' => Category::all()
//        'posts' => Post::latest()->with(['category','author'])->get()
    ]);
})->name('home');*/

/*Route::get('posts/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});*/

/*Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => Category::all()
//        'posts' => $category->posts->load(['category','author'])
    ]);
})->name('category');*/

Route::get('authors/{author:username}', function (User $author) {
    return view('posts', [
        'posts' => $author->posts,
        'categories' => Category::all()
//        'posts' => $author->posts->load(['category','author'])
    ]);
});
