<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $data =  $this->validate($request , [
            "commentable_id" => "required",
            "commentable_type" => "required",
            "comment" => "required|max:255",
        ]);
        
        auth()->user()->comments()->create($data);

        return response([
            'data'=>"نظر شما با موفقیت صبت شد",
            'status'=>'success'
        ]);
    }
}
