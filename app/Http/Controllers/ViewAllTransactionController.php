<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

class ViewAllTransactionController extends Controller
{
    public function ViewAllTransaction()
    {
        $transaction = Transaction::all();
        return view('viewalltransaction')->with('transaction',$transaction);
    }
}
