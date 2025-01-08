<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

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
    return view('contact', ['title' => 'Contact']);
});

Route::get('/media', function () {
    return view('Media', ['title' => 'Media']);
});

Route::get('/author/{user}', function (User $user) {
    
    return view('posts', ['title' => 'articles by '. $user->name, 'posts' => $user->posts]); 
});
