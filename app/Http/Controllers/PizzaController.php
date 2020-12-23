<?php

namespace App\Http\Controllers;

use App\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class PizzaController extends Controller
{

    public function ViewPizzaDetail($PizzaID){
        $Data=Pizza::where('id',$PizzaID)->first();
        return view('pizzadetail')->with('Data',$Data);
    }

    public function UpdatePizza($PizzaID){
        $Data=Pizza::where('id',$PizzaID)->first();
        return view('updatepizza')->with('Data',$Data);
    }

    public function ViewAddPizza(){
        return view('addpizza');
    }

    public function AddPizza(Request $request){
         $request->validate([
             'pizzaname' => 'required|max:20',
             'pizzaprice' => 'required|numeric|min:10000',
             'pizzadescription' => 'required|min:20',
             'pizzaimage' => 'required|mimes:jpg,jpeg,png,jfif'
         ]);

        $image = $request->file('pizzaimage');
        $src = 'assets/';
        $image->move($src,$request->pizzaimage->getClientOriginalName());
        
        DB::table('pizzas')->insert([
            'pizzaname' => $request->pizzaname,
            'pizzaprice' => $request->pizzaprice,
            'pizzadescription' => $request->pizzadescription,
            'pizzaimage' => $request->pizzaimage->getClientOriginalName(),
        ]);
        return redirect('/');
    }

    public function ViewEditPizza($PizzaID){
        $Data = Pizza::where('id',$PizzaID)->first();
        return view('editpizza')->with('Data',$Data);
    }

    public function EditPizza($PizzaID, Request $request){
        $request->validate([
            'pizzaname' => 'required|max:20',
            'pizzaprice' => 'required|numeric|min:10000',
            'pizzadescription' => 'required|min:20',
            'pizzaimage' => 'required|mimes:jpg,jpeg,png,jfif'
        ]);
        
        $image = $request->file('pizzaimage');
        $src = 'assets/';
        $image->move($src,$request->pizzaimage->getClientOriginalName());
        
        DB::table('pizzas')->where('id',$PizzaID)->update([
            'pizzaname' => $request->pizzaname,
            'pizzaprice' => $request->pizzaprice,
            'pizzadescription' => $request->pizzadescription,
            'pizzaimage' => $request->pizzaimage->getClientOriginalName(),   
        ]);

        return redirect('/');
    }

    public function ViewDeletePizza($PizzaID){
        $Data = Pizza::where('id',$PizzaID)->first();
        return view('viewdeletepizza')->with('Data',$Data);
    }

    public function DeletePizza($PizzaID){
        DB::table('pizzas')->where('id',$PizzaID)->delete();
        return redirect('/');
    }
}
