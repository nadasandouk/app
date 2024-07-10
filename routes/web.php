<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('home');
});

Route::get('/posts/{id}', function ($id=20) {
    return "welcome , my id".$id;
});


// Route::get('posts/{id}', function ($id=20) {
//     return view('posts');
// });

Route::get('/showALLPosts', function () {
    return view('posts.index');
});
Route::get('/showALLPosts/{id}', function ($id) {
    // return view('posts.show');
    return $id;
})->where(['id'=>'[0-9]+']);

Route::get('/showALLPosts/edit/{id}', function () {
    return view('posts.edit');
});
