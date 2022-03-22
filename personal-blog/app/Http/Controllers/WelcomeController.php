<?php

namespace App\Http\Controllers;

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
       return view('front.about.about',['uiSkills'=>$uiSkills]);
    }
}
