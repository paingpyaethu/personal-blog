<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.about.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
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
           'photo'=>'mimetypes:image/jpeg,image/png|file|max:2500'
        ]);

        if ($request->hasFile('photo')){
           $imgPath = 'public/about-img';
           $newImgName = uniqid()."_photo.".request()->file('photo')->getClientOriginalExtension();
           $request->file('photo')->storeAs($imgPath, $newImgName);
        }else {
           $newImgName = $request->no_photo;
        }

        $about = new About();
        $about->photo = $newImgName;
        $about->title = $request->title;
        $about->description = $request->description;
        $about->card_icon = $request->card_icon;
        $about->card_title = $request->card_title;
        $about->card_description = $request->card_description;
        $about->social_plugin = $request->social_plugin;
        $about->save();

        return redirect()->route('abouts.create')->with('success','Data has been added.');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
