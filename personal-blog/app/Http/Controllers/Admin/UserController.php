<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
   public function index()
   {
      $users = User::all();
      return view('admin.user.index', ['users' => $users]);
   }

   public function edit($id)
   {
      $editUser = User::find($id);
      return view('admin.user.edit',['editUser' => $editUser]);
   }

   public function update(Request $request, $id)
   {
      $request -> validate([
         'name'=>'required',
         'email'=>'required',
         'role'=>'required'
      ]);
      $editUser = User::find($id);
      $editUser->name = $request->name;
      $editUser->email = $request->email;
      $editUser->role = $request->role;

      $editUser->update();

      return redirect()->route('users.index')->with('success','You have successfully updated.');
   }

   public function destroy($id)
   {
      User::where('id',$id)->delete();
      return redirect()->route('users.index')->with('success','You have successfully deleted.');
   }


}
