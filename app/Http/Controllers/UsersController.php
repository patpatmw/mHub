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
}
