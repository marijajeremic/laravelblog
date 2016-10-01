<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class BlogController extends Controller
{
    public function getIndex(){
        $posts = Post::paginate(3);

        return view('blog.index')->withPosts($posts);
    }

    public function getSingle($slug){
        //fetch from the DB based on slug
        //uvek koristimo first umesto get kada ocekujemo jedan rezultat jer bi nam get vratio citav niz...objekat a mi znamo da oimamo samo jedan
        $post = Post::where('slug', '=', $slug)->first();

        //return the view and pass in the post object
        return view('blog.single')->withPost($post);
    }


}
