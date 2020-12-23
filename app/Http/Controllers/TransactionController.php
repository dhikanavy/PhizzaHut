<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Transactiondetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function ViewTransactionHistory(){
        $UserID = Auth::user()->id;
        $Data = Transaction::where('userid',$UserID)->get();
        return view('transactionhistory')->with('Data',$Data);
    }

    public function ViewTransactionDetail($TransactionID){
        $Data=Transactiondetail::where('transactionid',$TransactionID)->get();
        return view('transactiondetail')->with('Data',$Data);
    }
}
