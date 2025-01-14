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
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
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
    
    return view('posts', ['title' => count($user->posts) . ' articles by '. $user->name, 'posts' => $user->posts]); 
});

Route::get('/categories/{category:slug}', function (Category $category) {
    
    return view('posts', ['title' =>  ' Articles in : ' . $category->name , 'posts' => $category->posts]); 
});