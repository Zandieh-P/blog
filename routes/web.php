<?php

use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Services\Newsletter;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

//use App\Models\Category;
//use App\Models\User;
//use App\Models\Post;
//use Illuminate\Support\Facades\File;
//use Spatie\YamlFrontMatter\YamlFrontMatter;

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::post('newsletter', NewsletterController::class);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

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

/*Route::get('authors/{author:username}', function (User $author) {
    return view('posts.index', [
        'posts' => $author->posts
//        ,'categories' => Category::all()
//        'posts' => $author->posts->load(['category','author'])
    ]);
});*/
