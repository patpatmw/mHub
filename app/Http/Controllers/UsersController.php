<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index(){
        $allUsers = User::all();
        return view('users', compact('allUsers'));
    }
    public function show($id){
        $user = User::find($id);
        return view('show',compact('user'));
    }
    public function edit($id){
        $user = User::find($id);
        return view('edit',compact('user'));
    }
    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route("allusers");
    }
    public function update($id,Request $request){
        //dd($request->all());
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route("allusers");
    }
}