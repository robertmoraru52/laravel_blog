<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Cache\RateLimiting\Limit;

class PagesController extends Controller{

    public function getIndex(){
        $posts=Post::orderBy('created_at','desc')->limit(4)->get() ;
        return view("welcome")->with('posts',$posts);
    }

    public function getAbout(){

        $first='Robert';
        $last='Moraru';
        $fullname=$first . ' ' . $last;
        $email='robertmoraru52@yahoo.com';
        $data=[];
        $data['fullname']=$fullname;
        $data['email']=$email;

        return view('about')->with('data',$data);
    }
    public function getContact(){
        return view('contact');
    }

    

    

}