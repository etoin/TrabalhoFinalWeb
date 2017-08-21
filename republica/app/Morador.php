<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Morador extends Model
{
    protected $fillable = ['nome', 'apelido', 'cidade',  'email'];
}
