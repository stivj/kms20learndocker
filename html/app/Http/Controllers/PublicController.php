<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    public function home(){
        $name = "Stiven";
        $array = ['piim', 'sai', 'leib'];
        return view('home', compact('name', 'array'));
    }
    public function posts(){
       // $posts = Post::select(['title', 'id'])->where('title','LIKE', '%et %')->where('id','<', '500')->limit(10)->orderBy('title', 'desc')->get();

        $posts = Post::simplePaginate(16);
//        dd($posts->toArray());
        return view('posts', compact('posts'));
    }
}
