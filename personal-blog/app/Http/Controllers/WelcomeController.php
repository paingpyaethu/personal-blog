<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\EduExp;
use App\Models\LikesDislike;
use App\Models\Post;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function index()
    {
       $Posts = Post::all();
       $abouts = About::all();
       return view('welcome',compact('Posts', 'abouts'));
    }

   public function show($id)
   {
      $Posts = Post::all();
      $abouts = About::all();
      $postDetail  = Post::find($id);
      $like = LikesDislike::where('post_id',$id)->where('type','like')->get();
      $dislike = LikesDislike::where('post_id',$id)->where('type','dislike')->get();

      $likeStatus = LikesDislike::where('post_id',$id)->where('user_id',Auth::user()->id)->first();
      return view('front.blog.single-blog',compact('postDetail','Posts', 'abouts','like','dislike','likeStatus'));
   }

    public function about()
    {
       $uiSkills = Skill::paginate(8);
       $eduExps = EduExp::all();
       $Posts = Post::all();
       $abouts = About::all();
       return view('front.about.about',['uiSkills'=>$uiSkills, 'edu_exps'=>$eduExps, 'Posts'=>$Posts, 'abouts'=>$abouts]);
    }
}
