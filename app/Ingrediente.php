<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    public function platos()
    {
    	return $this->belongsToMany(Plato::class,'asigne_ingredientes','plato_id','ingre_id');
    }
}
//Plato=user
//Ingrediente=Roles
