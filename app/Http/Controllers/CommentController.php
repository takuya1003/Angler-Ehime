<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * コメント投稿画面
     * @param array $query
     * 
     * @return view
     */
    public function create()
    {
        $query = \Request::query();

        return view('comments.create', [
            'post_id' => $query['post_id']
        ]);
    }

    /**
     * コメントをDBに保存
     * @param Request $request
     * @param object $comment
     * 
     * @return redirect
     */
    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->fill($request->all())->save();
        session()->flash('flash_message', '投稿が完了しました');

        return redirect('/posts/'.$request->post_id);
    }    
}
