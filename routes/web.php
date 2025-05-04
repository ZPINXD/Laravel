<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home',['title'=> 'Home Page']);
});

Route::get('/About', function () {
    return view('About',['title'=> 'About']);
});

Route::get('/Blog', function () {
    return view('Blog', ['title'=>'blog']);
});
Route::get('/Contact', function () {
    return view('Contact',['title'=> 'Contact']);
});
