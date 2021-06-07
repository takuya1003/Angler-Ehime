<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\User;
use \App\Post;


class PostController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function index()
    {
        //現在のクエリを配列で取得
        $query = \Request::query();
        $check = false;

        $posts = Post::all();

        return view('posts.index', [
            'posts' => $posts,
            'check' => $check
        ]);
    }


}
