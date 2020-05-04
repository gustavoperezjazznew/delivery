<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    public function ingredientes()
    {
    	return $this->belongsToMany(Ingrediente::class,'asigne_ingredientes','plato_id','ingre_id');
    }

    
}
