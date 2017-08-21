<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Morador_Contas extends Model
{
    //
    public function conta(){
    	return $this->belongsTo('App\Conta');
    }
}
