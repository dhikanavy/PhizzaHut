<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['userid','transactiondate'];
    
    public function user(){
        return $this->hasOne('App\User','id','userid');
    }
}
