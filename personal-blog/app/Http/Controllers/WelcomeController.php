<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\EduExp;
use App\Models\Skill;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
       return view('welcome');
    }

    public function about()
    {
       $uiSkills = Skill::paginate(8);
       $eduExps = EduExp::all();
       $abouts = About::all();
       return view('front.about.about',['uiSkills'=>$uiSkills, 'edu_exps'=>$eduExps, 'abouts'=>$abouts]);
    }
}
