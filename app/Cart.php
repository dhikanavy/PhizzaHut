<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['pizzaid', 'userid', 'quantity'];

    public function pizza(){
        return $this->hasOne('App\Pizza','id','pizzaid');
    }
}
