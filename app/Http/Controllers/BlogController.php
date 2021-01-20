<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function getIndex(){
        $posts=Post::simplePaginate(10);

        return view('blog.index')->with('posts',$posts);
    }


    public function getSingle($slug){
    $post=Post::where('slug','=',$slug)->first();
    return view('blog.single')->with('post',$post);
    }
}
