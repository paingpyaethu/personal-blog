<?php

namespace App\Http\Controllers;

use App\Models\LikesDislike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeDislikeController extends Controller
{
    public function like($postId)
    {
       $isExist = LikesDislike::where('post_id','=',$postId)->where('user_id','=',Auth::user()->id)->first();

       if (!$isExist)
       {
          $data = new LikesDislike();
          $data->post_id = $postId;
          $data->user_id = Auth::user()->id;
          $data->type = 'like';
          $data->save();

          return response()->json([
             'status'=>200,
          ]);
       } else {
          if ($isExist->type !== 'like')
          {
             LikesDislike::where('id',$isExist->id)->update([
                'type'=>'like',
             ]);
             return response()->json([
                'updateStatus'=>'success'
             ]);
          }
       }
       return back();
    }

    public function dislike($postId)
    {
       $isExist = LikesDislike::where('post_id','=',$postId)->where('user_id','=',Auth::user()->id)->first();
       if (!$isExist)
       {
          $data = new LikesDislike();
          $data->post_id = $postId;
          $data->user_id = Auth::user()->id;
          $data->type = 'dislike';
          $data->save();

          return response()->json([
             'disLikeStatus'=>200,
          ]);
       } else {
          if ($isExist->type !== 'dislike')
          {
             LikesDislike::where('id',$isExist->id)->update([
                'type'=>'dislike',
             ]);
             return response()->json([
                'updateStatus'=>'success'
             ]);
          }
       }
       return back();
    }
}
