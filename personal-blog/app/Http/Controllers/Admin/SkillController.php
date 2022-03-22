<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::paginate(5);
        return view('admin.skill.index',['skills'=>$skills]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
           'name' => 'required',
           'percent' => 'required',
           'color_role' => 'required'
        ]);

        $skill = new Skill();
        $skill->name = $request->name;
        $skill->percent = $request->percent;
        $skill->color_role = $request->color_role;
        $skill->save();

        return redirect()->route('skills.index')->with('success','Skill added.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_skill = Skill::find($id);
        return view('admin.skill.edit',compact('edit_skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $request -> validate([
          'name' => 'required',
          'percent' => 'required',
          'color_role' => 'required'
       ]);
       $edit_skill = Skill::find($id);
       $edit_skill->name = $request->name;
       $edit_skill->percent = $request->percent;
       $edit_skill->color_role = $request->color_role;
       $edit_skill->update();

       return redirect()->route('skills.index')->with('success','Skill updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Skill::find($id)->delete();
        return redirect()->route('skills.index')->with('success','Skill deleted.');
    }
}
