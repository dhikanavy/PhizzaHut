<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Pizza;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function ViewCart(){
        $UserID = Auth::user()->id;
        $Data=Cart::where('userid',$UserID)->get();
        return view('viewcart')->with('Data',$Data);
    }
    
    
    public function AddtoCart(Request $request, $PizzaID){
        $UserCart = Auth::user()->id;
        
        $request->validate([
            'quantity' => 'required|numeric|min:1'
        ]);

        DB::table('carts')->insert([
            'userid' => $UserCart,
            'pizzaid' => $PizzaID,
            'quantity'=>$request->quantity,
        ]);

        return redirect('/');
    }

    public function Delete($CartID){
        DB::table('carts')->where('id',$CartID)->delete();
        return redirect('/viewcart');
    }

    public function Update($CartID, Request $request){
        $request->validate([
            'quantity' => 'numeric|min:1'
        ]);

        DB::table('carts')->where('id',$CartID)->update([
            'quantity' => $request->quantity,
        ]);
        return redirect('/viewcart');
    }

    public function Checkout(Request $request){
        $UserID = Auth::user()->id;
        //Carbon untuk dapetin waktu
        $Date = Carbon::now('Asia/Jakarta');

        DB::table('transactions')->insert([
            'userid' => $UserID,
            'transactiondate' => $Date,
        ]);
        
        $TransactionID = Transaction::where('userid',$UserID)->get()->last()->id;
        $Carts = Cart::where('userid',$UserID)->get();

        foreach($Carts as $cart){
            DB::table('transactiondetails')->insert([
                'pizzaid' => $cart->pizzaid,
                'transactionid' => $TransactionID,
                'quantity' => $cart->quantity,
            ]);
        }
        DB::table('carts')->where('userid',$UserID)->delete();

        return redirect('/');
    }
}
