<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function saveComment(Request $request)
    {
       $validator = Validator::make($request->all(), [
          'text'=>'required'
       ]);

       if ($validator->fails())
       {
          return response()->json([
             'status'=>400,
             'errors'=>$validator->messages(),
          ]);
       }
       else
       {
          $comment = new Comment();
          $comment->post_id = $request->post;
          $comment->user_id = Auth::user()->id;
          $comment->text = $request->text;
          $comment->save();

          return response()->json([
             'bool'=>true
          ]);
       }
    }

//    public function fetchComment($postId)
//    {
//       $AjaxComments = Comment::find($postId);
//       return response()->json([
//          'aComments'=>$AjaxComments
//       ]);
//    }
}
