<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class UkrController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at','desc')->paginate(3);
        return view('lang.ukr.index',[
            'posts'=>$posts
        ]);
    }

    public function news(){
        $posts = Post::orderBy('created_at','desc')->get();
        return view('lang.ukr.posts.index',[
            'posts'=>$posts
        ]);
    }

    public function show($slug){
        $post = Post::where('slug', $slug)->first();
        return view('lang.ukr.posts.show',[
            'post'=>$post
        ]);
    }

    public function library(){
        return view('lang.ukr.library');
    }

    public function contacts(){
        return view('lang.ukr.contact');
    }

    public function teamlead(){
        return view('lang.ukr.teamlead');
    }

    public function studkom(){
        return view('lang.ukr.studkom');
    }
    
    public function rating(){
        return view('lang.ukr.rating');
    }
    
    public function sociasolar(){
        return view('lang.ukr.sociasolar');
    }

    public function academsolar(){
        return view('lang.ukr.acadsolar');
    }

    public function dorm(){
        return view('lang.ukr.dorm');
    }

    public function eduevents(){
        return view('lang.ukr.eduevents');
    }

    public function materials(){
        return view('lang.ukr.materials');
    }
    public function prospectivestudent(){
        return view('lang.ukr.prospectivestudent');
    }
}
