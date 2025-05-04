<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return[
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
    }


    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn($post) => $post ['slug'] == $slug);
        
        if(! $post){
            abort(404);
        }
        return $post;
    }
}
?>