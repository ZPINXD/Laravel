<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Home',['title'=> 'Home Page']);
});

Route::get('/About', function () {
    return view('About',['nama'=>'Vano','title'=> 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title'=>'Blog','posts'=> Post::all()]);
});

Route::get('/posts/{slug}', function($slug){
    
    $post = Post::find($slug);

    return view('post',['title'=>'Single Post','post'=>$post]);

});

Route::get('/Contact', function () {
    return view('Contact',['title'=> 'Contact']);
});
