<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    //
    protected $fillable=['id','nombre'];

    public function libros(){
    	return $this->hasMany('App\Libro');
    }
}
