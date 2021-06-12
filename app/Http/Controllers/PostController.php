<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use \App\User;
use \App\Post;
use \App\Port;


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

    /**
     * トップページ
     * @param array $query
     * @param bool $check
     * @param object $posts
     * 
     * @return view
     */
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

    /**
     * 投稿ページ
     */
    public function create()
    {
         if (empty(Auth::id())) {
             //ログインしてなければ４０４へ
             return abort(404);
         }
         $ports = Port::all();

         return view('posts.create', [
             'ports' => $ports
         ]);
    }

}
