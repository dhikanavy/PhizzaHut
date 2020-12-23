<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ViewAllUserController extends Controller
{
    public function ViewAllUser()
    {
        $user = User::all();
        return view('viewalluser')->with('user',$user);
    }
}
