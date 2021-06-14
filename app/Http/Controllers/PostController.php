<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use JD\Cloudder\Facades\Cloudder;

use \App\User;
use \App\Post;
use \App\Port;


class PostController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * 
     */
    // public function __construct(Post $post)
    // {
    //     $this->post = $post;
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
     * @param object $ports
     * 
     * @return view
     */
    public function create()
    {
         if (empty(Auth::id())) {
             //ログインしてなければ４０４へ
             return abort(404);
         }
         $ports = Port::all();
        //  dd($ports);
         return view('posts.create', [
             'ports' => $ports
         ]);
    }

    /**
     * 投稿データをDBに保存する
     * @param Request $request
     * @param object $post
     * @param string $image
     * @param string $image_path
     * @param string $publicId
     * @param string $logoUrl
     * 
     * @return redirect
     */
    public function store(Request $request)
    {
        $post = new Post;

        //ユーザーが画像をアップロードした時の処理
        if ($image = $request->file('image')) {
            $image_path = $image->getRealPath();
            Cloudder::upload($image_path, null);
            //直前にアップロードされた画像のpublicIdを取得する
            $publicId = Cloudder::getPublicId();
            $logoUrl = Cloudder::secureShow($publicId, [
                'width'     => 300,
                'height'    => 300
            ]);
            $post->image_path = $logoUrl;
            $post->public_id  = $publicId;
        }
        $post->fill($request->all())->save();
        session()->flash('flash_message', '投稿が完了しました');
        return redirect('/');
    }

    /**
     * 投稿の詳細ページ
     * @param int $id
     * @param object $posts
     * 
     * @return view
     */
    public function show($id)
    {
        $posts = Post::find($id);
        if(is_null($posts)) {
            \Session::flash('err_msg','データがありません');
            return redirect('/');
        }
        return view('posts.show', [
            'posts' => $posts
        ]);
    }

}
