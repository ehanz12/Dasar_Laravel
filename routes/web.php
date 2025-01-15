<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    // $post = Post::with(['author', 'category'])->latest()->get();
    $post = Post::latest()->get();
    return view('posts', ['title' => 'Blog', 'posts' => $post]);
});

Route::get('/posts/{post:id}', function (post $post) {
    
    return view('post', ['title' => 'Single Post', 'post' => $post]); 
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact', 'main' => 'Ini adalah halaman contact']);
});

Route::get('/media', function () {
    return view('Media', ['title' => 'Media']);
});

Route::get('/author/{user:username}', function (User $user) {
    $post = $user->posts;
    
    return view('posts', ['title' => count($post) . ' articles by '. $user->name, 'posts' => $post]); 
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // $post = $category->posts->load('category', 'author');
    
    return view('posts', ['title' =>  ' Articles in : ' . $category->name , 'posts' => $category->posts]); 
});