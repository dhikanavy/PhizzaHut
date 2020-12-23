<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactiondetail extends Model
{
    protected $fillable = ['pizzaid', 'transactionid', 'quantity'];
    
    public function pizzatransaction(){
        return $this->hasOne('App\Pizza','id','pizzaid');
    }
}
