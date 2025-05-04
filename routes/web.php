<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home',['title'=> 'Home Page']);
});

Route::get('/About', function () {
    return view('About',['nama'=>'Vano','title'=> 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title'=>'Blog','posts'=> [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author'=> 'Geovano',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, asperiores veritatis ab itaque repellendus eius fugiat, quam eaque ipsum culpa soluta. Impedit ducimus maiores soluta optio nisi molestiae ipsa repellendus!'
        ],
        [
            'id' => 2, 
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author'=> 'Geovano',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex deleniti saepe dolorem voluptatibus repudiandae explicabo iste inventore similique labore eveniet culpa ipsum, esse excepturi optio, deserunt nihil quas id nostrum.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function($slug){
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author'=> 'Geovano',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, asperiores veritatis ab itaque repellendus eius fugiat, quam eaque ipsum culpa soluta. Impedit ducimus maiores soluta optio nisi molestiae ipsa repellendus!'
        ],
        [
            'id' => 2, 
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author'=> 'Geovano',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex deleniti saepe dolorem voluptatibus repudiandae explicabo iste inventore similique labore eveniet culpa ipsum, esse excepturi optio, deserunt nihil quas id nostrum.'
        ]
    ];

    $post = Arr::first($posts, function($post) use($slug){
        return $post['slug'] == $slug;
    });
    return view('post',['title'=>'Single Post','post'=>$post]);

});

Route::get('/Contact', function () {
    return view('Contact',['title'=> 'Contact']);
});
