<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::query();
        if($keyword = request('search')){
            $comments->where('comment' , 'LIKE' ,  "%{$keyword}%" )->orWhereHas('user' , function($query) use ($keyword) {
                $query->where('name' , 'LIKE' ,  "%{$keyword}%" );
            });
        }
        $comments = $comments->latest()->paginate(20);
        return view('panel.comments.index' , compact("comments"));
    }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        $comment->update(["approved" => 1]);
        alert()->success('با موفقیت تایید شد', 'موفقیت');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        alert()->success('با موفقیت حذف شد', 'موفقیت');
        return back();
    }
}
