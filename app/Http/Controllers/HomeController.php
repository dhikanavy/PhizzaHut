<?php

namespace App\Http\Controllers;

use App\Pizza;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function view(){
        $Pizza=Pizza::paginate(6);
        
        return view('homepage')->with('Pizza',$Pizza);
    }

    public function search(Request $request){
        $Pizza = Pizza::where('pizzaname', 'like', '%'.$request->search.'%')
        ->orderBy('pizzaname')
        ->paginate(6);

        return view('search')->with('Pizza',$Pizza);
    }

}
