<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Comment;
use App\Models\EduExp;
use App\Models\LikesDislike;
use App\Models\Post;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

      $dPhoto = User::find(Auth::id());
      $comments = Comment::where('post_id',$id)->latest()->get();
      return view('front.blog.single-blog',compact('postDetail','Posts', 'abouts','like','dislike','comments','dPhoto'));
   }

    public function about()
    {
       $uiSkills = Skill::paginate(8);
       $eduExps = EduExp::all();
       $Posts = Post::all();
       $abouts = About::all();
       return view('front.about.about',['uiSkills'=>$uiSkills, 'edu_exps'=>$eduExps, 'Posts'=>$Posts, 'abouts'=>$abouts]);
    }

   public function photoUpload(Request $request)
   {
      $request->validate([
         'photo'=>'required|mimetypes:image/jpeg,image/png|file|max:2500'
      ]);

      if ($request->hasFile('photo'))
      {
         $imgPath = 'public/user-img';
         Storage::delete($imgPath.Auth::user()->photo);

         $imgName = uniqid().'_user-img.'.$request->file('photo')->getClientOriginalExtension();
         $request->file('photo')->storeAs($imgPath, $imgName);
      }

      $userPhoto = User::find(Auth::id());
      $userPhoto->photo = $imgName;
      $userPhoto->update();

      return redirect()->route('welcome.index');
   }

}
