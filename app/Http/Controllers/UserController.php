<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{    
    public function viewregister(){
        return view('register');
    }
    
    public function viewlogin(){
        return view('login');
    }

    public function register(Request $request){
        
        $request->validate([
            'username' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
            'confirmpassword' => 'required|same:password',
            'address' => 'required',
            'phonenumber' => 'required|numeric',
            'gender' => 'required',
        ]);

        $password = Hash::make($request->password);

        User::create([
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>$password,
            'address'=>$request->address,
            'phonenumber'=>$request->phonenumber,
            'gender'=>$request->gender,
            'role'=>'Member'
        ]);

        return redirect()->action('UserController@viewlogin');
    }
    
    public function login(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            
            return redirect('/');
        }
        else{
            return redirect()->action('UserController@viewlogin');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->action('UserController@viewlogin');
    }
    
}
